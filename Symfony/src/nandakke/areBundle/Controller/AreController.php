<?php

namespace nandakke\areBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AreController extends Controller
{
    public function indexAction($name)
    {
    	print "indexAction start";
    	$ares = $this->getDoctrine()
    	->getRepository('nandakkeareBundle:Are')
    	->findAll();

    	print "indexAction findAll done";

    	if (!$are) {
    		throw $this->createNotFoundException('No data found');
    	}

    	print "indexAction render start";
        return $this->render('areBundle:Are:index.html.twig', $ares);
    }
}
