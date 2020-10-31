<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GlobalController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('global/index.html.twig', [
        ]);
    }


    /**
     * @Route("/poèmes", name="poemes")
     */
    public function poemes(): Response
    {
        return $this->render('global/poemes.html.twig', [
           
        ]);
    }
    /**
     * @Route("/poème", name="poeme")
     */
    public function poeme(): Response
    {
        return $this->render('global/poem-detail.html.twig', [
           
        ]);
    }
    /**
     * @Route("/souvenirs", name="souvenirs")
     */
    public function souvenirs(): Response
    {
        return $this->render('global/souvenirs.html.twig', [
           
        ]);
    }
    /**
     * @Route("/pages", name="pages-feuilletées")
     */
    public function pages(): Response
    {
        return $this->render('global/pages.html.twig', [
           
        ]);
    }
    /** 
     * @Route("/page", name="page-detail")
     */
    public function page(): Response
    {
        return $this->render('global/page-detail.html.twig', [
           
        ]);
    }

    /**
     * @Route("/mémoires", name="mémoires")
     */
    public function memoires(): Response
    {
        return $this->render('global/mémoires.html.twig', [
           
        ]);
    }
    /**
     * @Route("/mémoire", name="mémoire-detail")
     */
    public function memoire(): Response
    {
        return $this->render('global/mémoire-detail.html.twig', [
           
        ]);
    }
    /**
     * @Route("/rouviere", name="rouviere")
     */
    public function rouviere(): Response
    {
        return $this->render('global/rouviere.html.twig', [
           
        ]);
    }
    /**
     * @Route("/liens", name="liens")
     */
    public function liens(): Response
    {
        return $this->render('global/liens.html.twig', [
           
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('global/contact.html.twig', [
           
        ]);
    }
}
