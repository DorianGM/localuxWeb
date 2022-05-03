<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tel')
            ->add('email')
            ->add('rue')
            ->add('cp')
            ->add('ville')
            ->add('numerocartebancaire')
            ->add('dateexpiration')
            ->add('crytpogramme')
            ->add('nom')
            ->add('prenom')
            ->add('login')
            ->add('motdepasse')
            ->add('id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
