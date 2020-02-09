<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PasswordUpdateType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'oldPassword',
                PasswordType::class,
                $this->getConfiguration("Ancien mot de passe", "Indiquez votre mot de passe actuel ...")
            )
            ->add(
                'newPassword',
                PasswordType::class,
                $this->getConfiguration("Nouveau mot de passe", "Indiquez votre nouveau mot de passe ...")
            )
            ->add(
                'confirmPassword',
                PasswordType::class,
                $this->getConfiguration('Confirmation mot de passe', "Confirmez votre nouveau de mot passe ...")
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
