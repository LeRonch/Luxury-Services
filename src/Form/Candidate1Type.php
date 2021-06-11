<?php

namespace App\Form;

use App\Entity\Candidate;
use PhpParser\Node\Scalar\MagicConst\File;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Candidate1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('gender', ChoiceType::class, [
            'choices'  => [
                'Male' => 'Male',
                'Female' => 'Female',
                'Other' => 'Other',
            ],
        ])
            ->add('first_name')
            ->add('last_name')
            ->add('adress')
            ->add('country')
            ->add('nationality')
            ->add('passport', FileType::class, [
            

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '5000k',
                        'mimeTypes' => [
                            'image/png',
                            'application/x-pdf',
                            'application/pdf',
                            'image/jpg',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            // ...
            ])
            ->add('cv', FileType::class, [
                
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '5000k',
                        'mimeTypes' => [
                            'image/png',
                        'application/x-pdf',
                        'application/pdf',
                        'image/jpg',
                        'image/gif',  
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
        
            // ...
            ])
            ->add('profil_picture', FileType::class,[
                
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '5000k',
                        'mimeTypes' => [
                            'image/png',
                            'application/x-pdf',
                            'application/pdf',
                            'image/jpg',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            // ...
            ])
            ->add('current_location')
            ->add('date_of_birth')
            ->add('place_or_birth')
            ->add('description')
            ->add('experience_id')
            ->add('info_admin_candidat_id')
            ->add('job_category_id')
            ->add('user_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }

    // public function getChoices()
    // {
    //     $choices = Candidate::GENDER;
    //     $output = [];
    //     foreach($choices as $k => $v) {
    //         $output[$v] = $k;
    //     }
    //     return $output;
    // }
}
