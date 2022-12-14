<?php

namespace App\Form;

use App\Entity\Computer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComputerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('modele')
            ->add('description')
            ->add('prix')
            ->add('annee_sortie')
            ->add('numero_serie')
            ->add('image')
            ->add('marque')
            ->add('auteur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Computer::class,
        ]);
    }
}
