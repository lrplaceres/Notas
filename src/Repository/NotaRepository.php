<?php

namespace App\Repository;

use App\Entity\Nota;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Nota>
 *
 * @method Nota|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nota|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nota[]    findAll()
 * @method Nota[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nota::class);
    }

    public function save(Nota $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Nota $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByParam($value,$user): array
    {
        return $this->createQueryBuilder('n')
            ->orwhere('n.titulo LIKE :val')
            ->orWhere('n.tags LIKE :val')
            ->orWhere('n.descripcion LIKE :val')
            ->andWhere('n.user = :user')
            ->setParameter('val', '%'.$value.'%')
            ->setParameter('user', $user)
            ->orderBy('n.fecha_creacion', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function findByParamPublic($value, $public, $eliminada): array
    {
        return $this->createQueryBuilder('n')
            ->orwhere('n.titulo LIKE :val')
            ->orWhere('n.tags LIKE :val')
            ->orWhere('n.descripcion LIKE :val')
            ->andWhere('n.publico = :public')
            ->andWhere('n.eliminada = :elim')
            ->setParameter('val', '%'.$value.'%')
            ->setParameter('public', $public)
            ->setParameter('elim', $eliminada)
            ->orderBy('n.fecha_creacion', 'ASC')
            ->getQuery()
            ->getResult();
    }


    //    /**
    //     * @return Nota[] Returns an array of Nota objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('n.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Nota
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
