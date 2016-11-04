<?php

namespace Utilisateurs\usersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('usersBundle:Default:index.html.twig', array('name' => $name));
    }
}
