<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class ConferenceController extends AbstractController
{
    #[Route('/hello/{name}', name: 'app_conference')]
    public function index(string $name): Response
    {
           
       
        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
            'name' => $name,
        ]);

    
    }
}
