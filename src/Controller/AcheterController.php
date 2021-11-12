<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcheterController extends AbstractController
{
    /**
     * @Route("/acheter", name="acheter")
     */
    public function index(): Response
    {
        return $this->render('acheter/acheter.html.twig', [
            'controller_name' => 'AcheterController',
        ]);
    }
}
