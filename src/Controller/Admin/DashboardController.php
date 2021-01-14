<?php

namespace App\Controller\Admin;

use App\Entity\Accueil;
use App\Entity\Category;
use App\Entity\Cgu;
use App\Entity\Cgv;
use App\Entity\Contact;
use App\Entity\Product;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('PRODUCT AMP');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Page accueil', 'fas fa-pager', Accueil::class);
        yield MenuItem::linkToCrud('Produits', 'fas fa-tag', Product::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-file-contract', Contact::class);
        yield MenuItem::linkToCrud('Cgu', 'fas fa-list', Cgu::class);
        yield MenuItem::linkToCrud('Cgv', 'fas fa-list', Cgv::class);
    }
}
