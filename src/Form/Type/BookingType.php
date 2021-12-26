<?php

namespace App\Form\Type;

use App\DTO\PassengerDTO;
use App\Entity\Passenger;
use App\Repository\PassengerRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Response;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder ->add('passenger', EntityType::class, [
            'class' => Passenger::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.surname', 'ASC');
//                dd($er);
            },
            'choice_label' => 'fullName'
        ])
            ->add('dateTime', DateType::class);
    }

//    public function configureOptions(OptionsResolver $resolver): void
//    {
//        $resolver->setDefaults([
//            'data_class' => PassengerDTO::class
//        ]);
//    }
//
//    public function getBlockPrefix()
//    {
//        return '';
//    }

}