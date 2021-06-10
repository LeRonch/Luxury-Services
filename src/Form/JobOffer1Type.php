<?php

namespace App\Form;

use App\Entity\JobOffer;
use Proxies\__CG__\App\Entity\Client;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobOffer1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('active')
            ->add('notes')
            ->add('location')
            ->add('closing_date')
            ->add('salary')
            ->add('description')
            ->add('title')
            ->add('client_id', EntityType::class,[
                'class' => Client::class,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('client')
                    ->orderBy('client.society_name', 'ASC');
                },
                'choice_label' => 'society_name'
            ])
            ->add('job_type_id')
            ->add('job_category_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => JobOffer::class,
        ]);
    }
}
