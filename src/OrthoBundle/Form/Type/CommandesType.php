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
                    'attr' => array(
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy'
                    ))
            )
            ->add('appareillages', 'entity', array(
                'class' => 'OrthoBundle:Appareillages',
                'property' => 'nom',
                'expanded' => 'true',
                'multiple' => 'true',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $entityRepository) {
                    return $entityRepository->orderApparelsByWeight();
                }
            ))
            ->add('adjonctions', 'entity', array(
                'class' => 'OrthoBundle:Adjonctions',
                'property' => 'nom',
                'multiple' => 'true',
                'expanded' => 'true',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $entityRepository) {
                    return $entityRepository->orderAdjonctionsByWeight();
                }
            ))
            ->add('couleur')
            ->add('motif')
            
            ->add('commentaireLabo', 'textarea')
            ->add('file1', 'file', array(
                'required' => false
            ))
            ->add('file2', 'file', array(
                'required' => false
            ))
            ->add('file3', 'file', array(
                'required' => false
            ))
            ->add('commentairePrestataire3D', 'textarea', array(
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
