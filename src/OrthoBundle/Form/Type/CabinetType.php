<?php

namespace OrthoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CabinetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCab', 'text', array(
                'label' => 'Nom du Cabinet : '
            ))
            ->add('adresseCab', 'text', array(
                'label' => 'Adresse : '
            ))
            ->add('codepostalCab', 'integer', array(
                'label' => 'Code Postal : '
            ))
            ->add('villeCab', 'text', array(
                'label' => 'Ville : '
            ))
            ->add('telephoneCab', 'integer', array(
                'label' => 'Téléphone : '
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OrthoBundle\Entity\Cabinetsdentaires'
        ));
    }
}
