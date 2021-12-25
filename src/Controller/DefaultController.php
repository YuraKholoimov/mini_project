<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("index/{welcome}", name="index")
     */
    public function indexAction($welcome)
    {
        return $this->render("base.html.twig", [
            "welcome" => $welcome
        ]);
    }
}