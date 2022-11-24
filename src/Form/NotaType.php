<?php

namespace App\Form;

use App\Entity\Nota;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titulo', TextType::class, [
                'label' => 'Título',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control', 'placeholder' => 'Insertar título', 'maxlength' => '255']
            ])
            ->add('tags', TextType::class, [
                'label' => 'Tags',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control', 'placeholder' => 'Insertar tags', 'maxlength' => '255']
            ])
            ->add('descripcion', TextareaType::class, [
                'label' => 'Descripción',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control', 'placeholder' => 'Inserte su nota']
            ])
            ->add('publico', CheckboxType::class, [
                'label' => 'Público',
                'required' => false,
                'label_attr' => ['class' => 'form-check-label', 'style' => 'margin: 20px 0'],
                'attr' => ['class' => 'form-check-input', 'style' => 'margin: 25px']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Aceptar',
                'attr' => array('class' => 'btn btn-primary')
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Nota::class,
        ]);
    }
}
