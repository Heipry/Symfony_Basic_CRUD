<?php

namespace App\Form;

use App\Entity\Alumnos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Alumnos1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nExpediente')
            ->add('nombre')
            ->add('apellidos')
            ->add('fechaNacimiento')
            ->add('sexo')
            ->add('email')
            ->add('telefono')
            ->add('gradoId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Alumnos::class,
        ]);
    }
}
