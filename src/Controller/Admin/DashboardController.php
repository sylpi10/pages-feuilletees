<?php

namespace App\Controller\Admin;

use App\Entity\Poem;
use App\Entity\Article;
use App\Entity\PoemCategory;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\ArticleCrudController;
use App\Entity\Memories;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Menu\SectionMenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Menu\SubMenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect($routeBuilder->setController(ArticleCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Pages Feuilletées');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Administration', 'fa fa-home');

        yield MenuItem::section('Poèmes');
        yield MenuItem::linkToCrud('Poèmes', 'fa fa-file-word', Poem::class);
        yield MenuItem::linkToCrud('Catégories de Poème', 'fa fa-file-word', PoemCategory::class);
        
        
        yield MenuItem::section('Pages feuilletées');
        yield MenuItem::linkToCrud('Article (pages)', 'icon class', Article::class);

        yield MenuItem::section('Mémoires');
        yield MenuItem::linkToCrud('Mémoires', 'icon class', Memories::class);
    }
}
