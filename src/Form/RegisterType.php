<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TypeTextType::class, [
                'label' => 'Votre Nom',
                'constraints'=>new Length([
                    'min'=>2, 
                    'max'=>30
                ]),
                'attr' => [
                    'placeholder'=>'Merci de saisir votre Nom' ]
                ])
            ->add('prenom',TypeTextType::class,[
                'label'=> 'Votre Prénom',
                'constraints'=>new Length([
                    'min'=>2, 
                    'max'=>30
                ]),
                'attr' =>[
                    'placeholder'=>'Merci de saisir votre Prénom' ]
                ])
            ->add('adresse',TypeTextType::class,[
                'label'=> 'Votre Adresse',
                'constraints'=>new Length([
                    'min'=>2, 
                    'max'=>255
                ]),
                'attr' =>[
                    'placeholder'=>'Merci de saisir votre Adresse' ]
                ])
            ->add('code_postal',TypeTextType::class,[
                'label'=>'Votre Code Postal',
                'constraints'=>new Length([
                    'min'=>5, 
                    'max'=>5
                ]),
                'attr' =>[ 
                    'placeholder'=>'Merci de saisir votre Code Postal' ]
                ])
            ->add('ville',TypeTextType::class,[
                'label'=>'Votre Ville',
                'constraints'=>new Length([
                    'min'=>2, 
                    'max'=>90
                ]),
                'attr' =>[
                    'placeholder'=>'Merci de saisir votre Ville' ]
                ])
            ->add('email',EmailType::class,[
                'label'=>'Votre Mail',
                'constraints'=>new Length([
                    'min'=>2, 
                    'max'=>90
                ]),
                'attr' =>[
                    'placeholder'=>'Merci de saisir votre Adresse Mail' ]
                ])
            ->add('password',PasswordType::class,[
                'label'=>'Votre Mot De Passe',
                'attr' =>[ 
                    'placeholder'=>'Merci de saisir votre Mot de Passe' ]
                ])
                ->add('password_confirm',RepeatedType::class,[
                    'type'=>PasswordType::class,
                    'mapped'=>false,
                    'invalid_message'=>'Le mot de passe et la confirmation doivent être identiques',
                    'label'=>'Mon Mot de Passe',
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
                'label'=>"S'inscrire"
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
