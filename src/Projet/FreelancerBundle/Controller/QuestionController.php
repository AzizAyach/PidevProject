<?php

namespace Projet\FreelancerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\FreelancerBundle\Entity\Test;
use Projet\FreelancerBundle\Entity\Question;


/**
 * Question controller.
 *
 */
class QuestionController extends Controller
{

    /**
     * Lists all Question entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProjetFreelancerBundle:Question')->findAll();

        return $this->render('ProjetFreelancerBundle:Question:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Question entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetFreelancerBundle:Question')->find($id);
    
        $entities = $em->getRepository('ProjetFreelancerBundle:Test')->findAll();
        
        
        if (!$entity) {
      
     return $this->render('ProjetFreelancerBundle:Test:index.html.twig', array(
            'entities' => $entities,));
        }

        return $this->render('ProjetFreelancerBundle:Question:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
