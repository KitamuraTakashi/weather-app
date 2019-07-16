<?php

namespace App\Form;

use App\Entity\Weather;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WeatherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('data_time')
            ->add('weather_code')
            ->add('weather_name')
            ->add('temperature_min')
            ->add('temperature_max')
            ->add('rain_percentage')
            ->add('pinpoint_code')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Weather::class,
        ]);
    }
}
