<?php

namespace nandakke\areBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AreController extends Controller {
    public function indexAction($name) {
        $ares = $this->getDoctrine()->getRepository('areBundle:Are')->findAll();

        if (!$ares) {
            throw $this->createNotFoundException('No data found');
        }
        return $this
                ->render('areBundle:Are:index.html.twig',
                        array('ares' => $ares));
    }
}
