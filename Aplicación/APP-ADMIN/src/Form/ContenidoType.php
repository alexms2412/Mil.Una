<?php

namespace App\Form;

use App\Entity\Contenido;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContenidoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('TipoContenido')
            ->add('DescripcionContenido')
            ->add('EnlaceContenido', FileType::class, ['mapped' => false, 'required' => false] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contenido::class,
        ]);
    }
}
