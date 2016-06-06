<?php

namespace OrthoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjoutappType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array(
                'label' => 'Nom de l appareillage : '
            ))
            ->add('famille', 'text', array(
                'label' => 'Famille de l appareillage : '
            ))
            ->add('image', 'text', array(
                'label' => 'Image : '
            ))
            ->add('commentaire', 'textarea', array(
                'label' => 'Commentaires : '
            ));
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
}
    