<?php

namespace OrthoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Util\LegacyFormHelper;
use OrthoBundle\Entity\Utilisateurs;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class UtilisateursCabinetType extends AbstractType
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
            ->add('nom', 'text', array(
                'label' => 'Nom complet du Cabinet : '
            ))
            ->add('adresse', 'text', array(

                'label' => 'Adresse : ',
                'attr' => array(
                    'placeholder' => 'N°, Rue')
            ))
            ->add('codepostal', 'number', array(
                'label' => 'Code Postal : '
            ))
            ->add('ville', 'text', array(
                'label' => 'Ville : '
            ))
            ->add('telephone', 'number', array(
                'label' => 'Téléphone : '
            ))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array(
                'label' => 'E-mail :',
                'translation_domain' => 'FOSUserBundle'
            ))
            ->add('adresseFacturation', 'text', array(
                'label' => 'Adresse de Facturation :',
                'attr' => array(
                    'placeholder' => "N°, Rue .."
                )
            ))
            ->add('codePostalFacturation', 'text', array(
                'label' => 'Code Postal',
                'attr' => array(
                    'placeholder' => 'Code Postal'
                )
            ))
            ->add('villeFacturation', 'text', array(
                'label' => 'Ville',
                'attr' => array(
                    'placeholder' => 'Ville'
                )
            ))
            ->add('telephoneFacturation', 'text', array(
                'label' => 'Téléphone :',
                'attr' => array(
                    'placeholder' => '09.87.65.43.21'
                )
            ))
            ->add('mailBis', 'email')
            ->add('mailTer', 'email');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OrthoBundle\Entity\Utilisateurs'
        ));
    }
}
