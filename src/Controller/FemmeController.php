<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FemmeController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/femme", name="femme")
     */
    public function index(): Response
    {

        $products = $this->entityManager->getRepository(Product::class)->findAll();
        
           

        return $this->render('femme/index.html.twig', [
            'controller_name' => 'FemmeController',
            'products'=>$products,
        ]);
    }

    /**
     * @Route("/article-femme/{slug}", name="productfemme")
     */
    public function show($slug)
    
    {
        
        $products = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);
        if (!$products){
            return $this->redirectToRoute('femme');
        }
        
           

        return $this->render('femme/index.html.twig', [
            'controller_name' => 'FemmeController',
            'products'=>$products,
        ]);
    }
}
