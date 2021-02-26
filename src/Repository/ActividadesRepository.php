<?php

namespace App\Repository;

use App\Entity\Actividades;
use \Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Actividades|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actividades|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actividades[]    findAll()
 * @method Actividades[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActividadesRepository extends  ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actividades::class);
    }
    
    public function findAllActive(){
        return $this->getEntityManager()
            ->createQuery("SELECT o FROM App:Actividades o WHERE o.vOfferCode='ACTIVE'"
                    . "ORDER BY o.fecha ASC") //TODO Preguntar a Anderr
            ->getResult();
    }
    
    public function findActividadesFromUsuaria($log_nombre) {
        $query = $this->getEntityManager()
                ->createQuery(
                        'SELECT o FROM App:Actividades a JOIN a.usuaria u WHERE u.nombre= :log_nombre'
        )->setParameter('nombre', $log_nombre);
        return $query->getResult();
        
    }

    // /**
    //  * @return Actividades[] Returns an array of Actividades objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Actividades
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
