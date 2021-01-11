<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('nom',TextType::class,[
                'label'=>'Votre Nom',
                'attr'=>[
                    'placeholder'=>'Veuillez saisir votre Nom'
                ]
            ])
            ->add('prenom',TextType::class,[
                'label'=>'Votre Prénom',
                'constraints'=>new Length([
                    'min'=>2, 
                    'max'=>30
                ]),
                'attr'=>[
                    'placeholder'=>'Veuillez saisir votre Prénom'
                ]
                
            ])
            ->add('adresse',TextType::class,[
                'label'=>'Votre Adresse',
                'attr'=>[
                    'placeholder'=>'Veuillez saisir votre Adresse'
                ]
            ])
            ->add('code_postal',TextType::class)
            ->add('ville',TextType::class,[
                'label'=>'Votre Ville',
                'attr'=>[
                    'placeholder'=>'Veuillez saisir votre Ville'
                ]
            ])
            ->add('telephone',TextType::class)
            ->add('adresse_livraison',TextType::class,[
                'label'=>'Votre Adresse de livraison',
                'attr'=>[
                    'placeholder'=>'Veuillez saisir votre Adresse de livraison'
                ]
            ])
            ->add('email',EmailType::class,[
                'label'=>'Votre Adresse Mail',
                'attr'=>[
                    'placeholder'=>'Veuillez saisir votre adresse mail'
                ]
            ])
            ->add('password_confirm',RepeatedType::class,[
                'type'=>PasswordType::class,
                'mapped'=>false,
                'invalid_message'=>'Le mot de passe et la confirmation doivent être identiques',
                'label'=>'Votre Mot de Passe',
                'required'=>true,
                'first_options'=>[
                    'label'=>'Mon Mot de passe',
                    'attr'=>[
                        'placeholder'=>'Veuillez saisir votre mot de passe'
                        ]
                    ],
                'second_options'=>[
                    'label'=>'Confirmation de votre mot de passe',
                    'attr'=>[
                        'placeholder'=>'Veuillez confirmer votre mot de passe'
                    ]
                ]
            ])
            ->add('submit',SubmitType::class,[
                'label'=>"S'inscrire",
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
