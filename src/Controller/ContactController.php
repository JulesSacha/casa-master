<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */

    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);

        $contact = $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $mail = (new TemplatedEmail())
            ->from($contact->get('email')->getData())
            ->to('contact@casa-transaction.com')
            ->context([
                'mail' => $contact->get('email')->getData(),
                // 'message' => $contact->get('message')->getData()
            ]  );
          
 

            $mailer->send($mail);

            // On confirme et on redirige
            $this->addFlash('message', 'Votre e-mail a bien été envoyé');
        // $form = $this->createForm(ContactType::class); // crée un formulaire de contact
        // $form->handleRequest($request);
        // if ($form->isSubmitted() && $form->isValid()) { // si le formulaire a été soumis et est valide
        //     $contact = $form->getData(); // récupère les informations du formulaire
        
        //     $mail = (new \Swift_Message('CASA-TRANSACTIONS - demande de contact - ')) // prépare le mail (avec son titre)
        //         ->setFrom($contact['email']) // définit l'expéditeur
        //         ->setTo('contact@casa-transactions.com') // définit le destinaire
        //         ->setBody( // définit le corps du message
        //             $this->renderView('contact/emailContact.html.twig', [ // passe les informations du formulaire au template de mail
        //                 'nom' => $contact['nom'],
        //                 'prenom' => $contact['prenom'],
        //                 'email' => $contact['email'],
        //                 'message' => $contact['message']
        //             ]),
        //             'text/html' // définit le format du message
        //         )
        //     ;
          
        //     $mailer->send($mail); // envoit le mail
        //     $this->addFlash('success', 'Votre message a bien été envoyé'); // message de succès
            return $this->redirectToRoute('contact'); // redirection
        }
        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

