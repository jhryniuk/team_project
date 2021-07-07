<?php

namespace App\Controller\Admin;

use App\Repository\ArticlesRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index(ArticlesRepository $articlesRepository, UsersRepository $usersRepository)
    {
        return $this->render('Admin/DefaultController/index.html.twig', [
            'users_total' => count($usersRepository->findAll()),
            'articles_total' => count($articlesRepository->findAll())
        ]);
    }
}