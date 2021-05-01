<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController extends AbstractController
{
    public function index(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('articles/index.html.twig', [
            'articles' => $articlesRepository->findAll()
        ]);
    }

    public function show(Articles $article): Response
    {
        return $this->render('articles/show.html.twig', [
            'article' => $article
        ]);
    }
}
