<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GenericGameRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GenericGameRepository extends EntityRepository
{
    public function findAllOrderByConsole()
    {
        return $this->createQueryBuilder('g')
                    ->leftJoin('g.consoleList','c')
                    ->leftJoin('c.brand','b')
                    ->orderBy('b.name,c.name,g.name', 'asc')
                    ->getQuery() 
                    ->getResult();
    }
    
    public function findByConsole($id)
    {
        return $this->createQueryBuilder('g')
                    ->leftJoin('g.consoleList','c')
                    ->where('c.id = :id')
                    ->setParameter('id', $id)
                    ->orderBy('g.name', 'asc')
                    ->getQuery() 
                    ->getResult();
    }
    
    public function findByGenreOrderByConsole($id)
    {
        return $this->createQueryBuilder('g')
                    ->leftJoin('g.genreList','ge')
                    ->leftJoin('g.consoleList','c')
                    ->leftJoin('c.brand','b')
                    ->where('ge.id = :id')
                    ->setParameter('id', $id)
                    ->orderBy('b.name,c.name,g.name', 'asc')
                    ->getQuery() 
                    ->getResult();
    }
    
    public function findByEditorOrderByConsole($id)
    {
        return $this->createQueryBuilder('g')
                    ->leftJoin('g.editorList','e')
                    ->leftJoin('g.consoleList','c')
                    ->leftJoin('c.brand','b')
                    ->where('e.id = :id')
                    ->setParameter('id', $id)
                    ->orderBy('b.name,c.name,g.name', 'asc')
                    ->getQuery() 
                    ->getResult();
    }
    
    public function findByDevelopperOrderByConsole($id)
    {
        return $this->createQueryBuilder('g')
                    ->leftJoin('g.developerList','d')
                    ->leftJoin('g.consoleList','c')
                    ->leftJoin('c.brand','b')
                    ->where('d.id = :id')
                    ->setParameter('id', $id)
                    ->orderBy('b.name,c.name,g.name', 'asc')
                    ->getQuery() 
                    ->getResult();
    }
    
}
