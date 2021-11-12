<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom'
                ]
            ])
            ->add('prenom',TextType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Prénom'
                ]
            ])
            ->add('telephone',TextType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Téléphone'
                ]
            ])
            ->add('email',TextType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Email'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Message'
                ]
            ])
            ->add('envoyer', SubmitType::class,[
                'attr' => [
                    'class' => 'btn-form'
                ]
            ])
       
            
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
          
        ]);
    }
}
