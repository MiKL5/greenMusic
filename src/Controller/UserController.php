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

// dénition de la route pour l'avatar de l'utilisateur
// avatar:
//     path: /avatar/{id}
//     controller: App\Controller\AvatarController::show

// class AvatarController extends AbstractController
// {
//     public function show(int $id)
//     {
//         // Récupérez l'avatar de l'utilisateur à partir de la base de données ou d'un autre emplacement de stockage
//         $avatar = ...

//         // Renvoyez l'avatar au client
//         return new Response($avatar, 200, [
//             'Content-Type' => 'image/jpeg'
//         ]);
//     }
// }