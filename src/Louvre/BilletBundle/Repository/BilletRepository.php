<?php

namespace Louvre\BilletBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * BilletRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BilletRepository extends EntityRepository
{

    public function getBilletsByReserv($res_id)
    {
        $query = $this->createQueryBuilder('b')
            ->select('b.id')
            ->where('b.reservation = :id')
            ->setParameter('id', $res_id)
            ->getQuery()
        ;

        return $query->getResult();
    }
}
