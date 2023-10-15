<?php

namespace App\Repository;

use App\Entity\RechercheParTitre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RechercheParTitre>
 *
 * @method RechercheParTitre|null find($id, $lockMode = null, $lockVersion = null)
 * @method RechercheParTitre|null findOneBy(array $criteria, array $orderBy = null)
 * @method RechercheParTitre[]    findAll()
 * @method RechercheParTitre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RechercheParTitreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RechercheParTitre::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(RechercheParTitre $entity, bool $flush = true): void
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
    public function remove(RechercheParTitre $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }



    // /**
    //  * @return RechercheParTitre[] Returns an array of RechercheParTitre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RechercheParTitre
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
