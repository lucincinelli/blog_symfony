<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CategorieRepository $categorieRepository)
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'categories' => $categorieRepository->findAll(),
        ]);
    }
}
