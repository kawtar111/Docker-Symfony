<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig');
    }

    /**
     * @Route("/article/js", name="article_js")
     */
    public function show_Py(): Response
     {
        return $this->render('blog/showPython.html.twig');
    }

     /**
     * @Route("/article/java", name="article_java")
     */
    public function show_Java(): Response
     {
        return $this->render('blog/showJava.html.twig');
    }

    /**
     * @Route("/article/php", name="article_php")
     */
    public function show_Php(): Response
     {
        return $this->render('blog/showPHP.html.twig');
    }
}
