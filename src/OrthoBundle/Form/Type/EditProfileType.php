<?php

namespace OrthoBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;


class EditProfileType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->buildUserForm($builder, $options);

        $builder->add('current_password', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'), array(
            'label' => 'form.current_password',
            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
            'constraints' => new UserPassword(),
        ))

        ->add('adresse', 'text', array(
        'attr' => array('placeholder' => 'Adresse'),
        'label' => 'Adresse',))

        ->add('codePostal', 'text', array( 'attr' => array( 'placeholder' => 'Code Postal'),
            'label' => 'Code Postal',))

        ->add('ville', 'text', array( 'attr' => array( 'placeholder' => 'ville'),
            'label' => 'Ville'))

        ->add('telephone', 'text', array('attr' => array( 'placeholder' => 'Ville'),
            'label' => 'Téléphone'))

        ->add('adresseFacturation', 'text', array(
            'attr' => array('placeholder' => 'Adresse'),
            'label' => 'Adresse',))

        ->add('codePostalFacturation', 'text', array( 'attr' => array( 'placeholder' => 'Code Postal'),
            'label' => 'Code Postal',))

        ->add('villeFacturation', 'text', array( 'attr' => array( 'placeholder' => 'ville'),
            'label' => 'Ville'))

        ->add('telephoneFacturation', 'text', array('attr' => array( 'placeholder' => 'Ville'),
            'label' => 'Téléphone'))

        ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array(
            'label' => 'E-mail 1',
            'translation_domain' => 'FOSUserBundle'
        ))

        ->add('mailBis', 'text', array( 'attr' => array( 'placeholder' => 'ville'),
            'label' => 'Email 2'))

        ->add('mailTer', 'text', array('attr' => array( 'placeholder' => 'Ville'),
            'label' => 'Email 3'))    
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'csrf_token_id' => 'profile',
            // BC for SF < 2.8
            'intention'  => 'profile',
        ));
    }

    // BC for SF < 2.7
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }

    // BC for SF < 3.0
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return 'app_user_edit';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
}
