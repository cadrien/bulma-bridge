<?php

namespace App\Controller;

use App\Form\ExampleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('', name: 'app_home')]
    public function index(): Response
    {
        $form = $this->createForm(ExampleType::class);

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
