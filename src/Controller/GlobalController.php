<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Memories;
use App\Entity\Poem;
use App\Entity\PoemCategory;
use App\Repository\ArticleRepository;
use App\Repository\MemoriesRepository;
use App\Repository\PoemCategoryRepository;
use App\Repository\PoemRepository;
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
    public function poemes(PoemRepository $poemrepo, PoemCategoryRepository $categrepo): Response
    {
        $poems = $poemrepo->findAll();
        $categs = $categrepo->findAll();
        return $this->render('global/poemes.html.twig', [
           'poems' => $poems,
           'categs' => $categs
        ]);
    }
    /**
     * @Route("/poème/{id}", name="poeme")
     */
    public function poeme(Poem $poem ): Response
    {
        return $this->render('global/poem-detail.html.twig', [
           'poem' => $poem
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
    public function pages(ArticleRepository $articleRepo): Response
    {
        $articles = $articleRepo->findAll();
        return $this->render('global/pages.html.twig', [
           'articles' => $articles
        ]);
    }
    /** 
     * @Route("/page/{id}", name="page-detail")
     */
    public function page(Article $article): Response
    {
        return $this->render('global/page-detail.html.twig', [
           'article' => $article
        ]);
    }

    /**
     * @Route("/mémoires", name="mémoires")
     */
    public function memoires(MemoriesRepository $memorepo): Response
    {
        $memories = $memorepo->findBy([], ['chapter'=> 'ASC']);
        return $this->render('global/memoires.html.twig', [
           'memories' => $memories
        ]);
    }
    /**
     * @Route("/mémoire/{id}", name="memoire-detail")
     */
    public function memoire(Memories $memories): Response
    {
        return $this->render('global/memoire-detail.html.twig', [
           'memorie' => $memories
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
