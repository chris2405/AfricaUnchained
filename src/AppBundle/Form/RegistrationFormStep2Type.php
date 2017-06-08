<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use libphonenumber\PhoneNumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use libphonenumber\PhoneNumberFormat;


class RegistrationFormStep2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('phone',\Misd\PhoneNumberBundle\Form\Type\PhoneNumberType::class, array(
            'widget' => 'country_choice',
//            'widget' => PhoneNumberFormat::INTERNATIONAL,
//            'country_choice' => array('GB', 'JE', 'FR', 'US'),
//            'preferred_country_choices' => array('FR')
        ));
        $builder->add('occupation');
        $builder->add('industry');
        $builder->add('other');

        $builder->add('country');
        $builder->add('city');
        $builder->add('affiliation');

    }

    public function getName()
    {
        return 'app_user_registration_step2';
    }
}

