<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $c1 = new Category();
        $c1->setName("Intrument à vent");
        $manager->persist($c1);

        $c11 = new Category();
        $c11->setName("Clarinette")
            ->setParent($c1);
        $manager->persist($c11);

        $c12 = new Category();
        $c12->setName("Flûte à Bec")
            ->setParent($c1);
        $manager->persist($c12);

        $c13 = new Category();
        $c13->setName("Flûte Traversière")
            ->setParent($c1);
        $manager->persist($c13);

        $c14 = new Category();
        $c14->setName("Saxophone")
            ->setParent($c1);
        $manager->persist($c14);

        $c15 = new Category();
        $c15->setName("Trompette")
            ->setParent($c1);
        $manager->persist($c15);

        $c2 = new Category();
        $c2->setName("Clavier");
        $manager->persist($c2);

        $c21 = new Category();
        $c21->setName("Clavier Maître")
            ->setParent($c2);
        $manager->persist($c21);

        $c22 = new Category();
        $c22->setName("Pioano à queue")
            ->setParent($c2);
        $manager->persist($c22);

        $c23 = new Category();
        $c23->setName("Piano droit")
            ->setParent($c2);
        $manager->persist($c23);

        $c24 = new Category();
        $c24->setName("Accessoires pour Pianos")
            ->setParent($c2);
        $manager->persist($c24);

        $c3 = new Category();
        $c3->setName("Cordes");
        $manager->persist($c3);

        $c31 = new Category();
        $c31->setName("Contrbasse acoustique")
            ->setParent($c3);
        $manager->persist($c31);

        $c32 = new Category();
        $c32->setName("Guitare acoustique")
            ->setParent($c3);
        $manager->persist($c32);

        $c33 = new Category();
        $c33->setName("Guitare classique")
            ->setParent($c3);
        $manager->persist($c33);

        $c34 = new Category();
        $c34->setName("Guitare électrique")
            ->setParent($c3);
        $manager->persist($c34);

        $c35 = new Category();
        $c35->setName("Violoncelle acoustique")
            ->setParent($c3);
        $manager->persist($c35);

        $c36 = new Category();
        $c36->setName("Violos acoustique")
            ->setParent($c3);
        $manager->persist($c36);

        $c37 = new Category();
        $c37->setName("Violoncelle Altos acoustique")
            ->setParent($c3);
        $manager->persist($c37);

        $c38 = new Category();
        $c38->setName("Violoncelle Altos électriques")
            ->setParent($c3);
        $manager->persist($c38);

        $c4 = new Category();
        $c4->setName("Percussions");
        $manager->persist($c4);

        $c41 = new Category();
        $c41->setName("Baguettes et maillets")
            ->setParent($c4);
        $manager->persist($c41);

        $c42 = new Category();
        $c42->setName("Batterie électrique")
            ->setParent($c4);
        $manager->persist($c42);

        $c43 = new Category();
        $c43->setName("Cymballes")
            ->setParent($c4);
        $manager->persist($c43);

        $c44 = new Category();
        $c44->setName("Peaux de Batteries et Percussions")
            ->setParent($c4);
        $manager->persist($c44);

        $c45 = new Category();
        $c45->setName("Percussions")
            ->setParent($c4);
        $manager->persist($c45);

        for ($i=0; $i<20; $i++)
        {
        $produit = new Product();
            $produit->setName('Produit'.$i)
                ->setWording('plouf')
                ->setDescription ('sqdqsdq'.$i)
                ->setSupplier('Fender')
                ->setPrice(mt_rand(1, 100))
                ->setImage('/')
                ->setCategory($c11);
            $manager->persist($produit);    
        }

        $manager->flush();
    }
}
