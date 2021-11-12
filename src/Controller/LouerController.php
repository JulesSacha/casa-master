<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LouerController extends AbstractController
{
    /**
     * @Route("/louer", name="louer")
     */
    public function index(): Response
    {
        return $this->render('louer/louer.html.twig', [
            'controller_name' => 'LouerController',
        ]);
    }


    
}
