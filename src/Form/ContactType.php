<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, [
            "label" => 'Votre Nom',
            "row_attr" => [
                'class' => "contact-info"
            ]
            ])
            
            ->add('email', EmailType::class, [
                "label" => 'Votre Email',
                "row_attr" => [
                    'class' => "contact-info"
                ]
                ])
                ->add('message', TextareaType::class, [
                    "label" => 'Votre Message',
                    "row_attr" => [
                        'class' => "contact-info message-info"
                    ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Contact::class
        ]);
    }
}
