<?php

namespace Sportama\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SportamaMainBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction()
    {
    	return $this->render('SportamaMainBundle:Default:home.html.twig');
    }
}
