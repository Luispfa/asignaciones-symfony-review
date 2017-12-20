<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username')
                ->add('firstName')
                ->add('lastName')
                ->add('email', 'email')
                ->add('password', 'password')
                ->add('role', 'choice', array('choices' => array('ROLE_ADMIN' => "Administrator", 'ROLE_USER' => "User"), 'placeholder' => 'Select a Role'))
                ->add('isActive', 'checkbox')
                //->add('createdAt')
                //->add('updatedAt')
                ->add('save', 'submit', array('label' => "Save user"))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'user';
    }

}
