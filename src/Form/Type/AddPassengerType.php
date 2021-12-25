<?php

namespace App\Form\Type;

use App\DTO\PassengerDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddPassengerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder ->add('surname', TextType::class, [
                'label' => 'Фамилия'
                ])
                ->add('secondName', TextType::class, [
                        'label' => 'Отчество'
                ])
                ->add('name', TextType::class, [
                        'label' => 'Имя'
                ])
                ->add('passportSerial', NumberType::class, [
                'label' => 'Серия'
                ])
                ->add('passportNumber', NumberType::class, [
                    'label' => 'Номер'
                ])
                ->add('add', SubmitType::class, [
                    'label' => 'Добавить'
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PassengerDTO::class
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }

}