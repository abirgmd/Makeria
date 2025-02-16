<?php
namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_debut', null, [
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La date de début est obligatoire.',
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de début ne peut pas être dans le passé.',
                    ]),
                ]
            ])
            ->add('date_fin', null, [
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La date de fin est obligatoire.',
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date de fin ne peut pas être dans le passé.',
                    ]),
                ],
            ])
            ->add('titreevents', null, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le titre de l\'événement est obligatoire.',
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Le titre doit comporter au moins {{ limit }} caractères.',
                    ]),
                ]
            ])
            ->add('descriptionevents', null, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La description de l\'événement est obligatoire.',
                    ]),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'La description doit comporter au moins {{ limit }} caractères.',
                    ]),
                ]
            ])
            // Validation de l'URL de l'image
            ->add('image1events', null, [
                'constraints' => [
                    new Assert\Url([
                        'message' => 'L\'URL de l\'image 1 n est pas valide.',
                    ]),
                ]
            ])
            ->add('image2events', null, [
                'constraints' => [
                    new Assert\Url([
                        'message' => 'L\'URL de l\'image 2 n est pas valide.',
                    ]),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }

    // Validation personnalisée pour vérifier que date_fin est après date_debut
    public function validateDates(ExecutionContextInterface $context)
    {
        $dateDebut = $this->getData()->getDateDebut();
        $dateFin = $this->getData()->getDateFin();
        
        // Vérifier si la date de fin est supérieure à la date de début
        if ($dateFin && $dateDebut && $dateFin <= $dateDebut) {
            $context->buildViolation('La date de fin doit être après la date de début.')
                ->atPath('date_fin')
                ->addViolation();
        }
    }
}