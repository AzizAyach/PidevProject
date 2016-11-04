<?php

namespace Projet\FreelancerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProjetRechercheForm extends AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {        
        $builder->add('motcle', 'text', array('label' => 'Mot-clé'));
    }
    
    public function getName()
    {        
        return 'ProjetRecherche';
    }
}