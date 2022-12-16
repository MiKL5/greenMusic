<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $c désigne une catégorie + un chiffre dés 1
        // $s désigne une sous-catégorie , sont numéro reprend celui de la cétérogie + celui de la sous-catégorie dés 0
        // $p désigne un produit, sont numéro reprend ceux de la catégorie et la sous-catégorie + celui du produit dés 0

        $c1 = new Category();
        $c1->setName("Intrument à vent");
        $manager->persist($c1);

        $s10 = new Category();
        $s10->setName("Clarinette")
            ->setParentCategory($c1);
        $manager->persist($s10);


        $p100 = new Product();
        $p100->setName("Clarinette en Sib")
             ->setWording("Système Allemand")
             ->setDescription("Modèle Solliste fabriqué à la main, 27 clés, 5 anneaux, clé Mi/Fa au niveau de Pavillon, bec M3D, ligature BG L7 et étui incl.")
             ->setPrice(5397.99);
        $manager->persist($p100);

        $p110 = new Product();
        $p110->setName("Clarinette en Mib")
             ->setWording("Système Boehm")
             ->setDescription("Modèle BC1256L-2-0, 19 clés, 6 anneaux, Clé de correction du Fa, Etui, ligature, couvre-bec et accessoires inc.")
             ->setPrice(7085.99);
        $manager->persist($p110);


        $s11 = new Category();
        $s11->setName("Flûte à Bec")
            ->setParentCategory($c1);
        $manager->persist($s11);

        
        $p111 = new Product();
        $p111->setName("Flûte à Bec Sopranos")
              ->setWording("Doigté Baroque")
              ->setDescription("En poirier naturel, double trou, trousse en coton et accessoires d'entretien inclus.")
              ->setPrice(66.99);
        $manager->persist($p111);


        $s12 = new Category();
        $s12->setName("Flûte Traversière")
            ->setParentCategory($c1);
        $manager->persist($s12);


        $p120 = new Product();
        $p120->setName("Flûte Traversière")
              ->setWording("Plâteau plein")
              ->setDescription("Fabriqué à la main, Paroi épaisse, en argent massif, cheminées non soudées, plâteau pleins, écouvillon et étui inclu.")
              ->setPrice(9666.99);
        $manager->persist($p120);


        $s13 = new Category();
        $s13->setName("Saxophone")
            ->setParentCategory($c1);
        $manager->persist($s13);

        $s14 = new Category();
        $s14->setName("Trompette")
            ->setParentCategory($c1);
        $manager->persist($s14);

        $c2 = new Category();
        $c2->setName("Clavier");
        $manager->persist($c2);

        $s20 = new Category();
        $s20->setName("Clavier Maître")
            ->setParentCategory($c2);
        $manager->persist($s20);

        // $p200 = new Product();
        // $p200 ->SetName('xxx');
        // $p200 ->SetPrice(0.00);
        // $p200 ->SetDescription("xxx");
        // $manager->persist($p200);

        $s21 = new Category();
        $s21->setName("Pioano à queue")
            ->setParentCategory($c2);
        $manager->persist($s21);

        $s22 = new Category();
        $s22->setName("Piano droit")
            ->setParentCategory($c2);
        $manager->persist($s22);

        $s23 = new Category();
        $s23->setName("Accessoires pour Pianos")
            ->setParentCategory($c2);
        $manager->persist($s23);

        $c3 = new Category();
        $c3->setName("Cordes");
        $manager->persist($c3);

        $s30 = new Category();
        $s30->setName("Contrbasse acoustique")
            ->setParentCategory($c3);
        $manager->persist($s30);

        $s31 = new Category();
        $s31->setName("Guitare semi-acoustique")
            ->setParentCategory($c3);
        $manager->persist($s31);

        $s32 = new Category();
        $s32->setName("Guitare classique")
            ->setParentCategory($c3);
        $manager->persist($s32);

        $s33 = new Category();
        $s33->setName("Guitare électrique")
            ->setParentCategory($c3);
        $manager->persist($s33);

        $s34 = new Category();
        $s34->setName("Violoncelle acoustique")
            ->setParentCategory($c3);
        $manager->persist($s34);

        $s35 = new Category();
        $s35->setName("Violos acoustique")
            ->setParentCategory($c3);
        $manager->persist($s35);

        $s36 = new Category();
        $s36->setName("Violoncelle Altos acoustique")
            ->setParentCategory($c3);
        $manager->persist($s36);

        $s37 = new Category();
        $s37->setName("Violoncelle Altos électriques")
            ->setParentCategory($c3);
        $manager->persist($s37);

        $c4 = new Category();
        $c4->setName("Percussions");
        $manager->persist($c4);

        $s40 = new Category();
        $s40->setName("Baguettes et maillets")
            ->setParentCategory($c4);
        $manager->persist($s40);

        $s41 = new Category();
        $s41->setName("Batterie électrique")
            ->setParentCategory($c4);
        $manager->persist($s41);

        $s42 = new Category();
        $s42->setName("Cymballes")
            ->setParentCategory($c4);
        $manager->persist($s42);

        $s43 = new Category();
        $s43->setName("Peaux de Batteries et Percussions")
            ->setParentCategory($c4);
        $manager->persist($s43);

        $s44 = new Category();
        $s44->setName("Percussions")
            ->setParentCategory($c4);
        $manager->persist($s44);

        // for ($i=0; $i<20; $i++)
        // {
        // $produit = new Product();
            // $produit->setName('Product'.$i)
        //         ->setWording('plouf')
        //         ->setDescription ('sqdqsdq'.$i)
        //         ->setSupplier('Fender')
        //         ->setPrice(mt_rand(1, 100))
        //         ->setImage('/')
        //         ->setCategory($s10);
        //     $manager->persist($produit);    
        // }

        $manager->flush();
    }
}
