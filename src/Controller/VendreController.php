<?php

namespace App\Controller;

use App\Form\EstimationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VendreController extends AbstractController
{
    /**
     * @Route("/vendre", name="vendre")
     */




        public function index(Request $request, \Swift_Mailer $mailer): Response
        {
            $form = $this->createForm(EstimationType::class); // crée un formulaire de contact
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) { // si le formulaire a été soumis et est valide
                $estimation = $form->getData(); // récupère les informations du formulaire
            
                $mail = (new \Swift_Message('CASA-TRANSACTIONS - demande d\'estimation - ')) // prépare le mail (avec son titre)
                    ->setFrom([$estimation['email'] => $estimation['email']]) // définit l'expéditeur
                    ->setTo('fernsner.j@gmail.com') // définit le destinaire
                    ->setBody( // définit le corps du message
                        $this->renderView('vendre/emailEstimation.html.twig', [ // passe les informations du formulaire au template de mail
                            'adresse' => $estimation['adresse'],
                            'codePostal' => $estimation['codePostal'],
                            'ville' => $estimation['ville'],
                            'typeBien' => $estimation['typeBien'],
                            'nbPiece' => $estimation['nbPiece'],
                            'surface' => $estimation['surface'],
                            'email' => $estimation['email']

                        ]),
                        'text/html' // définit le format du message
                    )
                ;
              
                $mailer->send($mail); // envoit le mail
                $this->addFlash('success', 'Votre message a bien été envoyé'); // message de succès
                return $this->redirectToRoute('vendre'); // redirection
            }
     
        
        return $this->render('vendre/vendre.html.twig', [
            'controller_name' => 'VendreController',
            'formEstimation' => $form->createView()
        ]);
    }

}