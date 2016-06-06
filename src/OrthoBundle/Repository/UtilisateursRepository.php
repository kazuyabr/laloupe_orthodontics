<?php

namespace OrthoBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UtilisateursRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UtilisateursRepository extends EntityRepository
{
    public function getActualUser($id)
    {
        $queryBuilder = $this->createQueryBuilder('user');

        $queryBuilder->leftJoin('user.labo', 'laboratoire')
            ->select('user', 'laboratoire')
            ->where('user.id = :id')
            ->setParameter('id', $id);

        return $queryBuilder->getQuery()->getResult();
    }
}