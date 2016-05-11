<?php

namespace OrthoBundle\Form;

use OrthoBundle\Entity\Couleur;
use OrthoBundle\Form\UploadsType;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Finder\Comparator\DateComparator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Tests\Extension\Core\Type\DateTypeTest;
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

            ->add('dateretour', DateType::class, array(
                "label" => "Date de retour souhaitée",
            ))

            ->add('appareillages', 'entity', array(
                'class' => 'OrthoBundle:Appareillages',
                'property' => 'titre_app',
                'multiple' => 'false'
            ))

            ->add('fidAdj', EntityType::class, array(
                'class' => 'OrthoBundle:Adjonctions',
                'property' => 'titre_adj',
                'multiple' => 'false'
            ))


            ->add('fidCouleur')

            ->add('fidMotif')

            ->add('comment', 'textarea')

            ->add('photos', 'file', array(
                'attr' => array(
                    'placeholder' => 'Insérer une image'
                ),
                'label' => 'Nom image'
            ))


            ->add('testimage', 'file', array(
                'mapped' => false
            ))

            ->add('testimage1', 'file', array(
                'mapped' => false
            ))
             ->add('testimage2', 'file', array(
                    'mapped' => false
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
