<?php

namespace nandakke\areBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AreController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('areBundle:Default:index.html.twig', array('name' => $name));
    }
}
