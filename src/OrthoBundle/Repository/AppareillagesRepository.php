<?php

namespace OrthoBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AppareillagesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AppareillagesRepository extends EntityRepository
{
    public function triParPoids()
    {
        $queryBuilder = $this->createQueryBuilder('u');

        $queryBuilder->leftJoin('u.poids', 'p')
                        ->orderBy('p.poids', 'DESC')
                        ->setMaxResults(10);

        return $queryBuilder;
    }


    public function getnameandimage(){

        $queryBuilder = $this->createQueryBuilder('appareillages')
                            ->select('appareillages.titreApp', 'appareillages.imgApp')
                            ->where('appareillages.familleApp = :famille')
                            ->setParameter('famille', 'mob');

        return $queryBuilder->getQuery()->getResult();

    }

    public function getComments()
    {
        // Début du Query Builder
        $queryBuilder = $this->createQueryBuilder('appareillage');

        // On sélectionne tout les id, ainsi que tout les commentaires
        $queryBuilder->select('appareillage.id', 'appareillage.titreApp', 'appareillage.commentairesApp', 'appareillage.familleApp');

        // On retourne le résultat
        return $queryBuilder->getQuery()->getResult();
    }


    /*public function RechercheAppareillages($tags)
    {
        $queryBuilder = $this->_em->createQueryBuilder()
            ->select('p')
            ->from($this->_entityName, 'p')
            ->Where('p.titreapp LIKE :Arc')
            ->setParameter('arc', '%'.$tags.'%');
        $query = $queryBuilder->getQuery();
        return $query->getResult();
    }*/



    public function getListofApparel($searchWord)
    {
        $queryBuilder = $this->createQueryBuilder('appareillages')
                            ->where('appareillages.titreApp LIKE :string')
                            ->setParameter('str', '%'.$searchWord.'%');

        return $queryBuilder->getQuery()->getResult();
    }

}
