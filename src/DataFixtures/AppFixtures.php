<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $c1 = new Category();
        $c1->setName("Bois");
        $manager->persist($c1);

        $c2 = new Category();
        $c2->setName("Claviers");
        $manager->persist($c2);

        $c3 = new Category();
        $c3->setName("Cordes");
        $manager->persist($c3);

        $c4 = new Category();
        $c4->setName("Cuivres");
        $manager->persist($c4);

        $c5 = new Category();
        $c5->setName("Percussions");
        $manager->persist($c5);

        $manager->flush();
    }
}
