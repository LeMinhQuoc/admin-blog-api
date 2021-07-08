<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userName');
        $builder->add('email');
        $builder->add('fullName');
        $builder->add('phone');
        $builder->add('password');
    }
}
