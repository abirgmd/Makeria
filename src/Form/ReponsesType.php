<?php
namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Reponses;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReponsesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Date_Rep', null, [
            'widget' => 'single_text'
        ])
        

            ->add('Contenu_Rep', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le contenu de la réponse est requis.']),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'Le contenu de la réponse doit contenir au moins {{ limit }} caractères.'
                    ])
                ]
            ])
            ->add('ID_Admin')
            ->add('ID_Rec', EntityType::class, [
                'class' => Reclamation::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponses::class,
        ]);
    }
}
