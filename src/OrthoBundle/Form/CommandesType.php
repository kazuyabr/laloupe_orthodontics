<?php

namespace OrthoBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
            ->add('referencePatient', 'text', array(
                'attr' => array(
                    'placeholder' => 'Nom ou ID'
                ),
                'label' => 'Référence Patient'
            ))
            
            ->add('prenomPatient', 'text', array(
                'attr' => array(
                    'placeholder' => 'Ex : Jean'
                ),
                'label' => 'Prénom Patient'
            ))

            ->add('dateretour', 'date', array(
                'attr' => array(
                    ),
                'widget' => 'single_text',

            ))

            ->add('appareillages', 'entity', array(
                'class' => 'OrthoBundle:Appareillages',
                'property' => 'titre_app',
                'multiple' => 'false',
                'query_builder' => function(\Doctrine\ORM\EntityRepository $entityRepository)
                {
                    return $entityRepository->triParPoids();
                }
            ))
            
            ->add('ajoutApp', 'button')
            
            ->add('fidAdj', EntityType::class, array(
                'class' => 'OrthoBundle:Adjonctions',
                'property' => 'titre_adj',
                'multiple' => 'false'
            ))

            ->add('ajoutAdj', 'button')

            ->add('fidCouleur')
            
            ->add('fidMotif')
            
            ->add('comment', 'textarea')
            
            ->add('testimage', 'file', array(
                'mapped' => false
            ))
            
            ->add('testimage1', 'file', array(
                'mapped' => false,
                'required' => false
            ))
            
            ->add('testimage2', 'file', array(
                'mapped' => false,
                'required' => false
            ))
            
            ->add('comment2', 'textarea', array(
                'required' => false
            ))
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
