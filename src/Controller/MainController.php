<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/aboutme", name="aboutme")
     */
    public function aboutMe()
    {
        return $this->render('aboutme.html.twig');
    }

    /**
     * @Route("/works", name="myWorks")
     */
    public function myWorks()
    {
        return $this->render('works.html.twig');
    }

    /**
     * @Route("/skills", name="skillsCV")
     */
    public function skillsCV()
    {
        return $this->render('skills.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact.html.twig');
    }

}