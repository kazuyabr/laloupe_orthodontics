<?php

namespace OrthoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fnomPatient')
            ->add('dateretour', 'date')
            ->add('datecommande', 'date')
            ->add('fidCabinet')
            ->add('fidPatient')
            ->add('fidLaboratoire')
            ->add('fidApp')
            ->add('fidAdj')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OrthoBundle\Entity\Commandes'
        ));
    }
}
