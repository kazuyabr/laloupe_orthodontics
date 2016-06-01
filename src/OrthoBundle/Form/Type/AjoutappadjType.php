<?php

namespace OrthoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjoutappadjType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreApp', 'text', array(
                'label' => 'Nom de l appareillage : '
            ))
            ->add('familleApp', 'text', array(
                'label' => 'Famille de l appareillage : '
            ))
            ->add('imgApp', 'integer', array(
                'label' => 'Image : '
            ))
            ->add('commentaireApp', 'text', array(
                'label' => 'Ville : '
            ))
            
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OrthoBundle\Entity\Appareillages'
        ));
    }