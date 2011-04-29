<?php

namespace Acme\PizzaBundle\Form;

use
    Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder
    ;

class OrderFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('known_customer', 'checkbox', array(
                'required' => false,
            ))
            ->add('known_phone', 'text')
            ->add('address', new Type\AddressType())
            ->add('items', 'collection', array(
                'type'       => new Type\PizzaItemType(),
                'modifiable' => true,
            ))
            ;
    }
}
