<?php

namespace App\Form;

use App\Entity\Estimation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EstimationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'email'
                ]
            ])
            ->add('telephone', IntegerType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Téléphone'
                ]
            ])
            ->add('adresse', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Adresse du bien'
                ]
            ])
            ->add('codePostal',TextType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Code Postal'
                ]
            ])
            ->add('ville',TextType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Ville'
                ]
            ])
            ->add('typeBien',ChoiceType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Type de bien',
                    'class'=>'form-select'
                   ],
                   'choices' => [
                    'Maison' => true,
                    'Appartement' => false,
                ],
            ])
            ->add('nbPiece',IntegerType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Nombre de pièces'
                   ]
            ])
            ->add('surface',IntegerType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Surface habitable (m²)'
                ]
            ])

            ->add('description', TextareaType::class, [
                'label' => false, 
                   'attr' => [
                    'placeholder' => 'Description'
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
