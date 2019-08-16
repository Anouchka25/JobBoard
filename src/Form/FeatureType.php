<?php

namespace App\Form;

use App\Entity\Feature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre1')
            ->add('description1')
            ->add('titre2')
            ->add('description2')
            ->add('titre3')
            ->add('description3')
            ->add('titre4')
            ->add('description4')
            ->add('titre5')
            ->add('description5')
            ->add('titre6')
            ->add('description6')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Feature::class,
        ]);
    }
}
