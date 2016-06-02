<?php

namespace OrthoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class CabinetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array(
                'label' => 'Identifiant : ',
                'translation_domain' => 'FOSUserBundle'
            ))
            ->add('plain_password', 'password', array(
                'label' => 'Mot de passe : '
            ))
            ->add('nomCab', 'text', array(
                'label' => 'Nom complet du Cabinet : '
            ))
            ->add('adresseCab', 'text', array(
                'label' => 'Adresse : ',
                'attr' => array(
                    'placeholder' => 'N°, Rue')
            ))
            ->add('codepostalCab', 'number', array(
                'label' => 'Code Postal : '
            ))
            ->add('villeCab', 'text', array(
                'label' => 'Ville : '
            ))
            ->add('telephoneCab', 'number', array(
                'label' => 'Téléphone : '
            ))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array(
                'label' => 'E-mail :',
                'translation_domain' => 'FOSUserBundle'
            ));
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
