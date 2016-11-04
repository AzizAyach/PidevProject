<?php

namespace Projet\FreelancerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProjetFreelancerBundle:Default:index.html.twig', array('name' => $name));
    }
    
}
