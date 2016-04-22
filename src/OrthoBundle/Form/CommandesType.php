<?php

namespace OrthoBundle\Form;

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
