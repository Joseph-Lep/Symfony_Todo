<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    #[Route('/todo', name: 'app_todo')]
    public function todo(): Response
    {
        return $this->render('index/todo.html.twig', [
            'controller_name' => 'TodoController',
        ]);
    }
    #[Route('/calendar', name: 'app_calendar')]

    public function calendar(): Response
    {
        return $this->render('index/calendar.html.twig', [
            'controller_name' => 'CalendarController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('index/about.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }


}
