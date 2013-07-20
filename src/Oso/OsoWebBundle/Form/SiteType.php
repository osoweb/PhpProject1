<?php

namespace Oso\OsoWebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('logo')
            ->add('url')
            ->add('fonction')
            ->add('location')
            ->add('description')
            ->add('token')
            ->add('is_public')
            ->add('is_activated')
            ->add('email')
            ->add('created_at')
            ->add('updated_at')
            ->add('categorie')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Oso\OsoWebBundle\Entity\Site'
        ));
    }

    public function getName()
    {
        return 'oso_osowebbundle_sitetype';
    }
}
