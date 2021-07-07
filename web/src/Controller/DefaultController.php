<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index(ArticlesRepository $articlesRepository)
    {
        return $this->render('DefaultController/index.html.twig', [
            'articles_total' => count($articlesRepository->findAll())
        ]);
    }
}