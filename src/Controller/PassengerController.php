<?php

namespace App\Controller;

use App\DTO\PassengerDTO;
use App\Entity\Passenger;
use App\Form\Type\AddPassengerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PassengerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/passenger")
 */
class PassengerController extends AbstractController
{

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/", name="addPassenger")
     *
     */
    public function addPassengerAction(Request $request): Response
    {
        $passengerDTO = new PassengerDTO();

        $form = $this->createForm(AddPassengerType::class, $passengerDTO, [
        'action' => $this->generateUrl('addPassenger'),
        ]);

        $form->handleRequest($request);

        $answer = Passenger::createFromDTO($passengerDTO);
        $this->entityManager->persist($answer);
        $this->entityManager->flush();

        return $this->renderForm('addPassengerForm.html.twig', [
            'form' => $form,
        ]);
    }


    /**
     * @Route("/list", name="passengers.list")
     */
    public function getListAction(PassengerRepository $passengerRepository): Response
    {
        $passengersList = $passengerRepository->findAll();


        return $this->render('passengersList.html.twig', [
            'passengersList' => $passengersList,
        ]);
    }
}