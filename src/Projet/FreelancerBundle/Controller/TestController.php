<?php

namespace Projet\FreelancerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Projet\FreelancerBundle\Entity\Test;
use Projet\FreelancerBundle\Entity\Question;


/**
 * Test controller.
 *
 */
class TestController extends Controller
{

    /**
     * Lists all Test entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProjetFreelancerBundle:Test')->findAll();

        return $this->render('ProjetFreelancerBundle:Test:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Test entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        
       
        //$entity = $em->getRepository('ProjetFreelancerBundle:Test')->find($id);
     
        $entity2= $em->getRepository('ProjetFreelancerBundle:Question')->find($id);
       // $entity2= $em->getRepository('ProjetFreelancerBundle:Question')->findBy(array('idCategorie' => 'java'));

   /*     if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test entity.');
        }*/
        if (!$entity2) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        return $this->render('ProjetFreelancerBundle:Test:show.html.twig', array(       
           // 'entity'      => $entity,
            'entity2'      => $entity2,
           
        ));
    }
}
