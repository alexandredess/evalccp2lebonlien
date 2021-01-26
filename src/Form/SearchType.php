<?php

namespace App\Form;

use App\classe\Search;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add ('string',TextType::class,[
                'label'=>'Rechercher',
                'required'=>'false',
                'attr'=>[
                    'placeholder'=>'Votre recherche ...',
                    'class'=>'form-control-sm'
                ]
            ])

            ->add ('categories',EntityType::class,[
                'required'=>'false',
                'class'=>Category::class,
                'multiple'=>'true',
                'expanded'=>'true'
            ])
            ->add ('submit',SubmitType::class,[
                'label'=>'Filtrer'

            ])
            ;
                
            
    }
        
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'GET',

        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}