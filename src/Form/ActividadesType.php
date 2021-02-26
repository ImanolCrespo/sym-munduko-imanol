<?php

namespace App\Form;

use App\Entity\Actividades;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActividadesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, [
            'label' => 'Nombre: ',
            'attr' => ['class' => 'form-control  '],
            ])
            ->add('grupo', TextType::class, [
            'label' => 'Grupo: ',
            'attr' => ['class' => 'form-control  '],
            ])
            ->add('foto', TextType::class, [
            'label' => 'Foto: ',
            'attr' => ['class' => 'form-control  '],
            ])
            ->add('fecha', DateType::class, [
            'label' => 'Fecha: ',
            'attr' => ['class' => 'form-control  '],
            ])
            ->add('ubicacion', TextType::class, [
            'label' => 'Ubicación: ',
            'attr' => ['class' => 'form-control  '],
            ])
            ->add('descripcion', TextType::class, [
            'label' => 'Descripción: ',
            'attr' => ['class' => 'form-control  '],
            ])
            ->add('precio', IntegerType::class, [
            'label' => 'Precio: ',
            'attr' => ['class' => 'form-control  '],
            ])
            ->add('idus', TextType::class, [
            'label' => 'Offer code: ',
            'attr' => ['class' => 'form-control  '],
            ])
            ->add('idcat', TextType::class, [
            'label' => 'Offer code: ',
            'attr' => ['class' => 'form-control  '],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Actividades::class,
        ]);
    }
}
