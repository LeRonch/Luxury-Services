<?php

namespace App\Repository;

use App\Entity\JobOffer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JobOffer|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobOffer|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobOffer[]    findAll()
 * @method JobOffer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobOfferRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobOffer::class);
    }

    public function FindAllWithJoin()
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT DISTINCT 
                jobOffer,
                jobCategory
            FROM 
                App\Entity\JobOffer jobOffer
            JOIN
                jobOffer.job_category_id jobCategory
            '
        );
        return $query->getResult();

    }
    public function getPreviousJob($job){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT  
                jobOffer
             FROM App\Entity\JobOffer jobOffer
             WHERE jobOffer.date_de_creation < :date 
             ORDER BY jobOffer.id DESC
            '
            )->setParameter('date', $job->getDateDeCreation())->setMaxResults(1);
        return $query->getResult();

    }
    public function getNextJob($job){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT  
                jobOffer
             FROM App\Entity\JobOffer jobOffer
             WHERE jobOffer.date_de_creation > :date 
             ORDER BY jobOffer.id ASC
            '
            )->setParameter('date', $job->getDateDeCreation())->setMaxResults(1);
        return $query->getResult();

    }
    // /**
    //  * @return JobOffer[] Returns an array of JobOffer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JobOffer
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
