<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index()
    {
        return $this->render("login.html.twig", [
        "foo" => "bar",
        "titi" => "toto"
        ]);
    }
}
