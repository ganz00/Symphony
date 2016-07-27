<?php

// src/Heebari/dataBundle/Form/Type/ProfileFormType.php

namespace Heebari\dataBundle\Form;


use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class) 
            ->add('firstName', TextType::class)    
            ->add('lastName',TextType::class)
            ->add('idCountry',CountryType::class)
            ->add('birthDate',DateType::class,array('years' => range(date('Y') -100, date('Y'))))
            ->add('profession',TextType::class);
    }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        
    }

    public function getName()
    {
        return 'Heebari_user_registration';
    }
}
