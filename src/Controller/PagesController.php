<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
# use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PagesController extends AbstractController
{
    #[Route('/', name: "app_home")]
    public function home() :Response
    {
        return $this->render ('pages/home.html.twig');
    }

    #[Route('/about-us', name: "app_about")]
    public function about() :Response
    {
        return $this->render ('pages/about.html.twig');
    }
}
