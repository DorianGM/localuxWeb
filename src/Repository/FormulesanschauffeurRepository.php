<?php

namespace App\Repository;

use App\Entity\Formulesanschauffeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Formulesanschauffeur>
 *
 * @method Formulesanschauffeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formulesanschauffeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formulesanschauffeur[]    findAll()
 * @method Formulesanschauffeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormulesanschauffeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Formulesanschauffeur::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Formulesanschauffeur $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Formulesanschauffeur $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Formulesanschauffeur[] Returns an array of Formulesanschauffeur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Formulesanschauffeur
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
