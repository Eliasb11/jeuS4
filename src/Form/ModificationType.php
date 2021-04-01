<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password', PasswordType::class)
            ->add('password', RepeatedType::class, array(
                'type'=> PasswordType::class,
                'required'=> true,
                'invalid_message'=> 'Les mots de passe ne sont pas les même',
                'first_options'=> array('label'=> 'Mot de passe '.'<br>'),
                'second_options'=> array('label'=> 'Confirmer le mot de passe '.'<br>'),
            ))
            ->add('firstname')
            ->add('lastname')
            ->add('pseudo')
            ->add('birthday', BirthdayType::class);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
