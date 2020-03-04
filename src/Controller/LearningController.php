<?php

namespace App\Controller;

use App\Entity\Klasse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/", name="learning")
     */
    public function index()
    {

        return $this->render('learning/index.html.twig');
    }

    /**
     * @Route("/aboutMe", name="aboutMe")
     */
    public function aboutMe()
    {
        $user= new Klasse();
        return $this->render("learning/aboutMe.html.twig",[
            "controller_name"=>$user->getName(),
            "controllertext"=>$user->getText()
        ]);
    }

}