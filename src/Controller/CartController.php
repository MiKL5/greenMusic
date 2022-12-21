<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    // #[Route('/add/{id}', name: 'app_add')]
    // public function add(SessionInterface $session,  Produit $id): Response
    // {
        // $cart = $session->get("cart", []);
        // $cart[] = $id;
        // $session->set("cart", $cart);
        // return $this->redirect("/cart");
    // }

    #[Route('/cart', name: 'app_cart')]
    public function index(): Response
    {
        // $cart = $session->get("cart", []);
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'Cart',
            // 'cart' => $cart,
        ]);
    }

    // #[Route('/clear', name: 'app_clear')]
    // public function clear(SessionInterface $session): Response
    // {
    //     $cart = $session->set("cart", []);

    //     return $this->redirect("/cart");
    // }

    // #[IsGranted("ROLE_USER")]
    // #[Route('/valid', name: 'app_valid')]
    // public function valid(ProduitRepository $repo, SessionInterface $session, EntityManagerInterface $manager): Response
    // {
    //     $cart = $session->get("cart", []);
    //     $com = new Commande();
    //     $com->setUser($this->getUser());
    //     $com->setDateCommande(new DateTime());
    //     $manager->persist($com);
    //     foreach ($cart as $product) {
    //         $p = $repo->find($product->getId());
    //         $sc = new SeCompose();
    //         $sc->setCommande($com);
    //         $sc->setProduit($p);
    //         $sc->setQuantite(3);
    //         $manager->persist($sc);
    //         $manager->flush();
    //     }

    //     $session->set("cart", []);
    //     return $this->redirect("/profile");
}
