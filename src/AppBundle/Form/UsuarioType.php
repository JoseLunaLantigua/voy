<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('fullName')
            ->add('primaryPhone')
            ->add('secondaryPhone')
            ->add('tipoUsuario')
            ->add('signupDate', DateType::class,array ('widget'=>'single_text','format'=>'yyyy-MM-dd'))
            ->add('createdAt', DateType::class,array ('widget'=>'single_text','format'=>'yyyy-MM-dd'))
            ->add('deleted')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario',
            'csrf_protection'=>false,
            'allow_extra_field'=>true
        ));
    }
}
