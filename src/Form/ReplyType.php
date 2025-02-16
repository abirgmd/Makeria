<?php

namespace App\Form;

use App\Entity\Message;
use App\Entity\Reply;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReplyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Champ pour le contenu de la réponse avec des validations
            ->add('contenureply', TextareaType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le contenu de la réponse ne peut pas être vide.']),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'La réponse doit contenir au moins {{ limit }} caractères.',
                        'max' => 1000,
                        'maxMessage' => 'La réponse ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            // Champ message, affichant le titre du message au lieu de l'ID
            ->add('message', EntityType::class, [
                'class' => Message::class,
                'choice_label' => 'titremsg',  // Affiche le titre du message pour une meilleure lisibilité
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reply::class,
        ]);
    }
}
