<?php

namespace Projet\FreelancerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FreelancerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('motdepasse')
            ->add('nom')
            ->add('prenom')
            ->add('pays')
            ->add('ville')
            ->add('addresse')
            ->add('cv')
            ->add('specialite')
            ->add('jeton')
            ->add('evaluation')
            ->add('telephone')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\FreelancerBundle\Entity\Freelancer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_freelancerbundle_freelancer';
    }
}
