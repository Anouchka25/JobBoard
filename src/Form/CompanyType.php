<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType; 

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('logo', FileType::class, array('label' => 'Logo (png, jpg)'))
            ->add('summary')
            ->add('website')
            ->add('email')
            ->add('datecreation')
            ->add('adresse')
            ->add('employees')
            ->add('facebook')
            ->add('google')
            ->add('twitter')
            ->add('instagram')
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
