<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\JobCategory;
use App\Entity\JobOffer;
use App\Entity\JobType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobOfferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('reference')
            ->add('active')
            ->add('notes')
            ->add('location')
            ->add('closing_date')
            ->add('salary')
            ->add('description')
            ->add('client_id', EntityType::class,[
                'class' => Client::class,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('client')
                    ->orderBy('client.society_name', 'ASC');
                },
                'choice_label' => 'society_name'
            ])
            ->add('job_type_id', EntityType::class,[
                'class' => JobType::class,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('JobTypeId')
                    ->orderBy('JobTypeId.job_type', 'ASC');
                },
                'choice_label' => 'job_type'
            ])
            ->add('job_category_id', EntityType::class,[
                'class' => JobCategory::class,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('JobCategory')
                    ->orderBy('JobCategory.job_category', 'ASC');
                },
                'choice_label' => 'job_category'
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => JobOffer::class,
        ]);
    }
}
