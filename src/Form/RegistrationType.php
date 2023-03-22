<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->setMethod('POST')
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => '2',
                    'maxlength' => '50',
                    'placeholder' => 'exemple@laquaiantique.com'
                ],
                'label' => 'Adresse e-mail',
                'label_attr' => [
                    'class' => 'form-label  mt-1'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Email(),
                    new Assert\Length(['min' => 2, 'max' => 50])
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => '********'
                    ],
                    'label' => 'Mot de passe',
                    'label_attr' => [
                        'class' => 'form-label  mt-1'
                    ],
                    'help' => 'Votre mot de passe doit faire une longueur de 8 caractères minimum et contenir au moins une majuscule, une minuscule et un chiffre.'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['min' => 8, 'max' => 50]),
                    new Assert\Regex([
                        'pattern' => '^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])^',
                        'match' => true,
                        'message' => 'Votre mot de passe doit avoir une longueur d\'au moins 8 caractères et contenir au moins une majuscule, une minuscule et un chiffre.',
                    ])
                ],
                'second_options' => [
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => '********'
                    ],
                    'label' => 'Confirmation du mot de passe',
                    'label_attr' => [
                        'class' => 'form-label  mt-1'
                    ]
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas.'
            ])
            ->add('customersNb', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Nombre de convives préféré (optionnel)',
                'label_attr' => [
                    'class' => 'form-label mt-1'
                ],
                'constraints' => [
                    new Assert\Length(['min' => 1, 'max' => 10])
                ],
                'help' => 'Vous pouvez indiquer ici un nombre de convives préféré entre 1 et 10.'
            ])
            ->add('allergy', TextType::class, [
                'attr' => ['form-control',
                ],
                'required' => false,
                'label' => 'Veuillez indiquer si vous avez des allergies (optionnel)',
                'label_attr' => [
                    'class' => 'form-label mt-1'
                ],
                'constraints' => [
                    new Assert\Length(['min' => 0, 'max' => 180])
                ],
                'help' => 'Si vous êtes allergique à certains produits, indiquez-les ici et nous adapterons nos plats pour vous.'
            ])
            ->add('submit', SubmitType::class, [
                    'attr' => [
                        'class' => 'btn btn-dark mt-1 mb-1'
                    ],
                    'label' => 'S\'inscrire'
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'sanitize_html' => true,
        ]);
    }
}
