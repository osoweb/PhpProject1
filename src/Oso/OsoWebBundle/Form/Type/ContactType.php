<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// src/Oso/OsoWebBundle/Form/ContactType.php

namespace Oso\OsoWebBundle\Form\Type;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('email', 'email');
        $builder->add('sujet');
        $builder->add('message', 'textarea');
    }


    
    public function getName() {
        return 'contact';
    }
}
?>
