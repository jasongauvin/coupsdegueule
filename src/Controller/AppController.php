<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index(PostRepository $postRepository)
    {
        $list = $postRepository->findAll();

        return $this->render("login.html.twig", [
        "foo" => "bar",
        "titi" => "toto",
        "postlist" => $list // boucle sur postlist <3

        ]);
    }




}
