<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MentionsController extends AbstractController
{
    /**
     * @Route("/mentions", name="mentions")
     */
    public function index(): Response
    {
        return $this->render('mentions/mentions.html.twig', [
            'controller_name' => 'MentionsController',
        ]);
    }

    /**
     * @Route("/confidentialite", name="confidentialite")
     */
    public function confidentialite(): Response
    {
        return $this->render('mentions/confidentialite.html.twig', [
            'controller_name' => 'MentionsController',
        ]);
    }

    /**
     * @Route("/grille-tarifaire", name="tarif")
     */
    public function tarif(): Response
    {
        return $this->render('mentions/tarif.html.twig', [
            'controller_name' => 'MentionsController',
        ]);
    }

}
