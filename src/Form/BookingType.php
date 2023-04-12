<?php

namespace App\Form;

use App\Entity\Booking;
use App\Validator\Constraints\ClosedDays;
use App\Validator\Constraints\MaxCustomersPerTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hours = ['12:00', '12:15', '12:30', '12:45', '13:00', '13:15', '13:30', '19:00', '19:15', '19:30', '19:45', '20:00', '20:15', '20:30', '20:45', '21:00', '21:15', '21:30'];

        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Votre nom',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new Assert\NotBlank()
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Votre adresse mail',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new Assert\NotBlank()
                ]
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Quel jour souhaitez-vous venir manger chez nous ?',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new ClosedDays()
                ]
            ])
            ->add('arrivalTime', ChoiceType::class, [
                'choices' => array_combine($hours, $hours),
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Pour quelle heure souhaitez-vous réserver ?',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new MaxCustomersPerTime()
                ],
            ])
            ->add('customersNb', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'min' => '1',
                    'max' => '6'
                ],
                'label' => 'Nombre de convives (pour les groupes de plus de 6 personnes, veuillez nous appeler directement)',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Positive(),
                    new MaxCustomersPerTime()
                ],
                'data' => $options['customersNb']
            ])
            ->add('allergy', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Si vous êtes allergique à certains produits, veuillez les indiquer ici:',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'required' => false,
                'data' => $options['allergy']
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-dark'
                ],
                'label' => 'Réserver'
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
            'constraints' => [
                new MaxCustomersPerTime(['timeField' => 'arrivalTime'])
            ],
            'allergy' => null,
            'customersNb' => null,
        ]);
    }

}
