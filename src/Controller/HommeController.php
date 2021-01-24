<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HommeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/homme", name="homme")
     */
    public function index(): Response
    {

        $products = $this->entityManager->getRepository(Product::class)->findAll();
        
           

        return $this->render('homme/index.html.twig', [
            'controller_name' => 'HommeController',
            'products'=>$products,
        ]);
    }

    /**
     * @Route("/article-homme/{slug}", name="producthomme")
     */
    public function show($slug)
    
    {
        
        $products = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);
        if (!$products){
            return $this->redirectToRoute('homme');
        }
        
           

        return $this->render('homme/show.html.twig', [
            'controller_name' => 'HommeController',
            'products'=>$products,
        ]);
    }
}
