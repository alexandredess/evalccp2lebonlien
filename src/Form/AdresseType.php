<?php

namespace App\Form;

use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,[
                'label'=>'Quel nom souhaitez vous donner à cette adresse ?',
                'attr'=>[
                    'placeholder'=>'Veuillez entrer le nom de votre Adresse'
                ]
            ])
            ->add('prenom',TextType::class,[
                'label'=>'Quel est votre prénom pour cette nouvelle adresse ?',
                'attr'=>[
                    'placeholder'=>'Veuillez entrer votre prénom '
                ]
            ])
            ->add('nom',TextType::class,[
                'label'=>'Quel est votre nom pour cette nouvelle adresse ?',
                'attr'=>[
                    'placeholder'=>'Veuillez entrer votre nom '
                ]
            ])
            ->add('societe',TextType::class,[
                'label'=>'Quel nom de votre société ?',
                'required'=>false,
                'attr'=>[
                    'placeholder'=>'(faclutatif) Veuillez entrer le nom de votre Société'
                ]
            ])
            ->add('adresse',TextType::class,[
                'label'=>'Quel est votre nouvelle adresse ?',
                'attr'=>[
                    'placeholder'=>'Veuillez entrer votre nouvelle Adresse'
                ]
            ])
            ->add('code_postal',TextType::class,[
                'label'=>'Quel est votre Code Postal ?',
                'attr'=>[
                    'placeholder'=>'Veuillez entrer votre Code Postal'
                ]
            ])
            ->add('ville',TextType::class,[
                'label'=>'Quel est votre ville de votre nouvelle adresse ?',
                'attr'=>[
                    'placeholder'=>'Veuillez entrer votre ville'
                ]
            ])
            ->add('pays',CountryType::class,[
                'label'=>'Quel est votre pays ?',
                'attr'=>[
                    'placeholder'=>'Veuillez entrer votre pays'
                ]
            ])
            ->add('telephone',TelType::class,[
                'label'=>'Quel est votre numéro de téléphone ?',
                'attr'=>[
                    'placeholder'=>'Veuillez entrer votre numéro de téléphone'
                ]
            ])
            ->add('submit',SubmitType::class,[
                'label'=>'Valider'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}
