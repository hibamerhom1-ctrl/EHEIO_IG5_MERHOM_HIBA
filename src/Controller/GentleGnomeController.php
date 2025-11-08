<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GentleGnomeController extends AbstractController
{
    #[Route('/gentle/gnome', name: 'app_gentle_gnome')]
    public function index(): Response
    {
        return $this->render('gentle_gnome/index.html.twig', [
            'controller_name' => 'GentleGnomeController',
        ]);
    }
}
