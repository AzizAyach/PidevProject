<?php

namespace Projet\FreelancerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Projet\FreelancerBundle\Entity\Projet;
use Projet\FreelancerBundle\Form\ProjetRechercheForm;


/**
 * Projet controller.
 *
 */
class ProjetController extends Controller
{

    /**
     * Lists all Projet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProjetFreelancerBundle:Projet')->findAll();

        return $this->render('ProjetFreelancerBundle:Projet:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Projet entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetFreelancerBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        return $this->render('ProjetFreelancerBundle:Projet:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
    
    
    
    public function listerAction()
{
 
	$form = $this->container->get('form.factory')->create(new ProjetRechercheForm());
	
	return $this->container->get('templating')->renderResponse('ProjetFreelancerBundle:Projet:rechercher.html.twig', array(
		'Projet' => $Projet,
		'form' => $form->createView()
	));
}

public function rechercherAction($text)
{               
    

        $em = $this->getDoctrine()->getManager();

        if($text != '')
        {
               $qb=$em->createQueryBuilder();

               $qb->select('a')
                  ->from('ProjetFreelancerBundle:Projet', 'a')
                  ->where("a.nom LIKE :motcle OR a.description LIKE :motcle")
                  ->orderBy('a.nom', 'ASC')
                  ->setParameter('motcle', '%'.$text.'%');

               $query = $qb->getQuery();               
               $Projet = $query->getResult();
        }
        else {
            $Projet = $em->getRepository('ProjetFreelancerBundle:Projet')->findAll();
        }
        $k=[];
        $i=0;
        foreach ($Projet as $p){
            $k[$i]=array(
              'id'=>$p->getId(),
                'nom'=>$p->getNom(),
                'desc'=>$p->getDescription(),
            );
            $i++;  
        }
           $res=new \Symfony\Component\HttpFoundation\JsonResponse();
          $res->setData(array('res'=> $k));
        
        
return $res;
    
}
}
