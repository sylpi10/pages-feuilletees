<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $contact = $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = (new TemplatedEmail())
            ->from($contact->get('email')->getData())
            ->to('pilletdo@wanadoo.fr')
            ->subject("Nouveau Message depuis le site Pages Feuilletées")
            ->text($contact->get('message')->getData())
            ->context([
                "form" => $form->createView()
            ]);
            $mailer->send($email);
            $message = "Votre message a bien été envoyé :)";
            
            $this->addFlash('success', $message);
            return $this->redirectToRoute("contact");
        }   
        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
