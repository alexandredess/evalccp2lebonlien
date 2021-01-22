<?php

namespace App\Controller;

use App\classe\Cart;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/commande", name="order")
     */
    public function index(Cart $cart)
    {
        $form = $this->createForm(OrderType::class,null,[
            'user'=>$this->getUser()
        ]);
        return $this->render('order/index.html.twig',[
            'form'=>$form->createView(),
            'cart'=>$cart->getFull(),
        ]);
    }
}
