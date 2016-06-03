<?php

namespace OrthoBundle\Form\Type;

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
            ->add('referencePatient', 'text', array(
                'attr' => array(
                    'placeholder' => 'Nom ou ID'
                ),
                'label' => 'Référence Patient',
            ))
            ->add('prenomPatient', 'text', array(
                'attr' => array(
                    'placeholder' => 'Ex : Jean'
                ),
                'label' => 'Prénom Patient'
            ))
            ->add('dateretour', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => [
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy'
                    ])
            )
            ->add('appareillages', 'entity', array(
                'class' => 'OrthoBundle:Appareillages',
                'property' => 'titre_app',
                'expanded' => 'true',
                'multiple' => 'true',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $entityRepository) {
                    return $entityRepository->triParPoids();
                }
            ))
            ->add('ajoutApp', 'button', array(
                'attr' => array(
                    'class' => 'action-button',
                    'data-toggle' => 'modal',
                    'data-target' => '#myModal'
                )
            ))

            ->add('fidAdj', 'entity', array(
                'class' => 'OrthoBundle:Adjonctions',
                'property' => 'titre_adj',
                'multiple' => 'true',
                'expanded' => 'true',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $entityRepository) {
                    return $entityRepository->triParPoids();
                }
            ))

            ->add('ajoutAdj', 'button', array(
                'attr' => array('class' => 'action-button')
            ))
            ->add('fidCouleur')
            ->add('fidMotif')
            ->add('comment', 'textarea')

            ->add('file1', 'file', array(
                'required' => false
            ))
            ->add('file2', 'file', array(
                'required' => false
            ))
            ->add('file3', 'file', array(
                'required' => false
            ))
            ->add('comment2', 'textarea', array(
                'required' => false

            ));

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
