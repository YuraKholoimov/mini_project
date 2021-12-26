<?php

namespace App\Form\Type;

use App\DTO\PassengerDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('stockStatus', ChoiceType::class, [
            'choices' => [
                'Main Statuses' => [
                    'Yes' => 'stock_yes',
                    'No' => 'stock_no',
                ],
                'Out of Stock Statuses' => [
                    'Backordered' => 'stock_backordered',
                    'Discontinued' => 'stock_discontinued',
                ],
            ],
        ]);
    }

//    public function configureOptions(OptionsResolver $resolver): void
//    {
//        $resolver->setDefaults([
//            'data_class' => PassengerDTO::class
//        ]);
//    }

}