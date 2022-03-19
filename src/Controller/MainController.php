<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    #[Route('/', name: 'main_homepage', methods: ['GET'])]
    public function homepage(): Response
    {
        return $this->render('main/homepage.html.twig');
    }

    #[Route('/list', name: 'main_list', methods: ['GET'])]
    public function list(): Response
    {
        return $this->render('main/list.html.twig');
    }

    #[Route('/detail', name: 'main_detail', methods: ['GET'])]
    public function detail(): Response
    {
        return $this->render('main/detail.html.twig');
    }

    #[Route('/form', name: 'main_form', methods: ['GET'])]
    public function form(): Response
    {
        return $this->render('main/form.html.twig');
    }
}
