<?php

namespace App\Controller;

use App\DTO\BookingDTO;
use App\Form\Type\BookingType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/booking")
 */
class BookingController extends AbstractController
{
    /**
     * @Route("/",  name="booking")
     */
    public function booking(Request $request): Response
    {
        $bookingDTO = new BookingDTO();

        $form = $this->createForm(BookingType::class, $bookingDTO, [
            'action' => $this->generateUrl('booking'),
        ]);

        return $this->renderForm('booking.html.twig', [
            'form' => $form,
        ]);

    }

//    /**
//     * @Route("/list", name="list")
//     */
//    public function getListAction(TicketRepository $ticketRepository): Response
//    {
//        $ticketRepository = $ticketRepository->findAll();
////        dd($ticketRepository);
//
//        return $this->render('bookingSuccess.html.twig', [
//            'ticketRepository' => $ticketRepository,
//        ]);
//    }

}