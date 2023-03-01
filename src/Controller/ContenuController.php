<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContenuController extends AbstractController
{
    #[Route('/contenu', name: 'app_contenu')]
    public function index(): Response
    {
        return $this->render('contenu/index.html.twig', [
            'controller_name' => 'ContenuController',
        ]);
    }
}
