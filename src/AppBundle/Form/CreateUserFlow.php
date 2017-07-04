<?php

namespace AppBundle\Form;


use Craue\FormFlowBundle\Form\FormFlow;
use Craue\FormFlowBundle\Form\FormFlowInterface;

class CreateUserFlow extends FormFlow
{
    protected function loadStepsConfig() {
        return array(
            array(
                'label' => 'Contact information',
                'form_type' => 'AppBundle\Form\RegistrationFormType'
            ),

            array(
                'label' => 'confirmation',
            ),
        );
    }

    public function getBlockPrefix() {
        return 'CreateUserFlow';
    }


}