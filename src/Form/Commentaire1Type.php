<?php

namespace App\Form;

use App\Entity\Commentaire;
use App\Entity\Event;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class Commentaire1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomcomment', null, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le nom du commentaire est obligatoire.',
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Le nom du commentaire doit comporter au moins {{ limit }} caractères.',
                    ])
                ]
            ])
            ->add('timecomment', null, [
                'widget' => 'single_text', // Utiliser un champ de texte simple pour la date
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La date et l\'heure du commentaire sont obligatoires.',
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date et l\'heure ne peuvent pas être dans le passé.',
                    ]),
                ]
            ])
            
            ->add('text_commentaire', null, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le texte du commentaire est obligatoire.',
                    ]),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'Le texte du commentaire doit comporter au moins {{ limit }} caractères.',
                    ])
                ]
            ])
            ->add('event', EntityType::class, [
                'class' => Event::class,
                'choice_label' => 'id',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'L\'événement est obligatoire.',
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}