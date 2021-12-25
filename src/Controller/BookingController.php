<?php

namespace App\Controller;

use App\Repository\TicketRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/booking")
 */
class BookingController extends AbstractController
{
//    /**
//     * @Route("/"  name="booking")
//     */
//    private function booking()
//    {
//
//
//    }

    /**
     * @Route("/list", name="list")
     */
    public function getListAction(TicketRepository $ticketRepository): Response
    {
        $ticketRepository = $ticketRepository->findAll();
//        dd($ticketRepository);

        return $this->render('bookingSuccess.html.twig', [
            'ticketRepository' => $ticketRepository,
        ]);
    }

}