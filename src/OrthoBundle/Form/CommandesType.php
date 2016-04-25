<?php

namespace OrthoBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            ->add('fidPatient', IntegerType::class, array(
                "label" => "n° d'ID du patient"
                ))
            ->add('fnomPatient', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Mme. / Mr. ...'
                ),
                    'label' => 'Prénom Patient',
                ))
            ->add('dateretour', DateType::class, array(
                "label" => "Date de retour souhaitée"
            ))
            ->add('fidApp', 'entity', array(
                'class' => 'OrthoBundle:Appareillages',
                'property' => 'titre_app',
                'multiple' => 'true'
            ))
            ->add('fidAdj', EntityType::class, array(
                'class' => 'OrthoBundle:Adjonctions',
                'property' => 'titre_adj',
                'multiple' => 'true'
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
