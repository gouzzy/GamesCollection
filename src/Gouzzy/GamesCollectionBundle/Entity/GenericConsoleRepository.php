<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GenericConsoleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GenericConsoleRepository extends EntityRepository
{
    public function findAllOrderByBrand()
    {
        return $this->createQueryBuilder('c')
                    ->leftJoin('c.brand','b')
                    ->orderBy('b.name,c.name', 'asc')
                    ->getQuery() 
                    ->getResult();
    }
}
