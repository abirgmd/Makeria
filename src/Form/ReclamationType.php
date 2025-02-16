<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Suppression de la validation de la date (Date_Rec) pour qu'elle n'ait plus de contraintes
            ->add('Date_Rec', DateType::class, [
                'widget' => 'single_text',
                // Pas de contraintes ici
            ])
            // Validation de l'URL pour l'image 1
            ->add('Images_Reclamation1', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'image 1 est requise']),
                    new Assert\Url([
                        'message' => 'L\'URL de l\'image 1 doit être valide.',
                    ]),
                ],
            ])
            // Validation de l'URL pour l'image 2
            ->add('Images_Reclamation2', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'image 2 est requise']),
                    new Assert\Url([
                        'message' => 'L\'URL de l\'image 2 doit être valide.',
                    ]),
                ],
            ])
            // Validation de la description
            ->add('Description_Rec', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description ne peut pas être vide']),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'La description doit contenir au moins 10 caractères',
                        'max' => 1000,
                        'maxMessage' => 'La description ne peut pas dépasser 1000 caractères',
                    ]),
                ],
            ])
            // Validation du statut (Stat_Rec)
            ->add('Stat_Rec', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le statut de la réclamation est requis']),
                    new Assert\Choice([
                        'choices' => ['en attente', 'résolu', 'en cours'],
                        'message' => 'Veuillez choisir un statut valide (en attente, résolu, en cours)',
                    ]),
                ],
            ])
            // Validation de l'ID de l'article (ID_Article)
            ->add('ID_Article', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'ID de l\'article est requis']),
                    new Assert\Type(['type' => 'integer', 'message' => 'L\'ID de l\'article doit être un nombre entier']),
                ],
            ])
            // Validation de l'ID de l'utilisateur (ID_Utilisateur)
            ->add('ID_Utilisateur', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'ID de l\'utilisateur est requis']),
                    new Assert\Type(['type' => 'integer', 'message' => 'L\'ID de l\'utilisateur doit être un nombre entier']),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
