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
            ->setTitle('Pagefeuilletees');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Poèmes', 'icon class', Poem::class);
        yield MenuItem::linkToCrud('Catégorie de Poème', 'icon class', PoemCategory::class);
        yield MenuItem::linkToCrud('Article (pages)', 'icon class', Article::class);
        yield MenuItem::linkToCrud('Mémoires', 'icon class', Memories::class);
    }
}
