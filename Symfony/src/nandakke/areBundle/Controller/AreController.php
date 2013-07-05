<?php

namespace nandakke\areBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AreController extends Controller
{
    public function indexAction($name)
    {
    	print "indexAction start";
    	$ares = $this->getDoctrine()
    	->getRepository('areBundle:Are')
    	->findAll();

    	if (!$are) {
    		throw $this->createNotFoundException('No data found');
    	}

        return $this->render('areBundle:Are:index.html.twig', $ares);
    }
}
