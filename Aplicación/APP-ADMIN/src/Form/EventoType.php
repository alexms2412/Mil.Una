<?php

namespace App\Form;

use App\Entity\Evento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextareaType,DateType};

class EventoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('TipoEvento')
            ->add('NombreEvento')
            ->add('DescripcionEvento', TextareaType::class,[
                'label' => 'Description Evento'
            ])
            ->add('FechaEvento',DateType::class,[
                'label' => 'Fecha Evento ',
                'widget' => 'single_text'
            ])
            ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evento::class,
        ]);
    }
}