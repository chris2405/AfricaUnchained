<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use libphonenumber\PhoneNumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use libphonenumber\PhoneNumberFormat;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('phone',\Misd\PhoneNumberBundle\Form\Type\PhoneNumberType::class, array(
                'label' => 'phone',
                'required' => true,
                'label_attr' => array(
                    'class' => ''
                ),
                'attr' => array(
                    'class' => 'form-control'
                ),
                'widget' => 'country_choice',
//            'widget' => PhoneNumberFormat::INTERNATIONAL,
//            'country_choice' => array('GB', 'JE', 'FR', 'US'),
//            'preferred_country_choices' => array('FR')
            ))
            ->add('username',TextType::class, array(
                'label' => 'username',
                'required' => true,
                'label_attr' => array(
                    'class' => ''
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => 'email',
                'required' => true,
                'label_attr' => array(
                    'class' => ''
                ),
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('password', RepeatedType::class, array(
                'required' => true,
                'type' => PasswordType::class,
                'invalid_message' => 'mot de passe incorrect',
                'options' => array(
                    'attr' => array(
                        'class'=> 'password-field'
                    )
                ),
                'first_options' => array(
                    'label' => 'password',
                ),
                'second_options' => array(
                    'label' => 'repeat-password',

                )

            ))

        ;

    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}

