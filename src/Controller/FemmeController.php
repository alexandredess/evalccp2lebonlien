<?php

namespace App\Controller;

use App\classe\Search;
use App\Entity\Product;
use App\Form\SearchType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

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
    public function index(Request $request): Response
    {
        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);

        $products = $this->entityManager->getRepository(Product::class)->findAll();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            
        }
        
           

        return $this->render('femme/index.html.twig', [
            'controller_name' => 'FemmeController',
            'products'=>$products,
            'form'=>$form->createView()
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
        
           

        return $this->render('femme/show.html.twig', [
            'controller_name' => 'FemmeController',
            'products'=>$products,
        ]);
    }

   
}
