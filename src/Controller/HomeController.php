<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route("/", name:"home")]
    function index(Request $request): Response{
        //dd($request); pour tester si besoin
        return new Response("Coucou " . $request->query->get("name", 'utilisateur') );
    }
}
