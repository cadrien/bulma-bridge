<?php

namespace App\Controller;

use App\Form\ExampleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    const ROUTE_HOME = 'home';
    const ROUTE_EXAMPLE_LAYOUT = 'home_layout';
    const ROUTE_EXAMPLE_HORIZONTAL = 'home_horizontal';

    #[Route('', name: self::ROUTE_HOME)]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/layout', name: self::ROUTE_EXAMPLE_LAYOUT)]
    public function layout(): Response
    {
        $form = $this->createForm(ExampleType::class);

        return $this->render('home/layout.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/horizontal', name: self::ROUTE_EXAMPLE_HORIZONTAL)]
    public function horizontal(): Response
    {
        $form = $this->createForm(ExampleType::class);

        return $this->render('home/horizontal.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
