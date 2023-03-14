<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    public $moviestitle = ['Filmuś', 'Filmeczek', 'Filmusiątko'];

    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        return $this->render('index.twig', [
            'titles' => $this->moviestitle,
        ]);
    }
}
