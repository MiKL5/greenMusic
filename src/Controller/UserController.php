<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/usr', name: 'app_usr')]
    public function usr(): Response
    {
        return $this->render('usr/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
