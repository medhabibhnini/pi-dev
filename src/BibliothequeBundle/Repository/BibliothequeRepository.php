<?php

namespace BibliothequeBundle\Repository;
use MyBundle\Entity\Livre;
use Doctrine\ORM\Query;

class BibliothequeRepository extends \Doctrine\ORM\EntityRepository
{
public function findEntitiesByString($str)
{
    return $this->getEntityManager()
        ->createQuery('SELECT p 
        FROM MyBundle:Livre p
        WHERE p.nomlivre LIKE :str'

        )->setParameter('str', '%'.$str.'%')->getResult();
}
public function findCommande($user)
{
    $query=$this->getEntityManager()
        ->createQuery("select m from MyBundle:Commande m WHERE m.idUser='$user'");
    return $query->getResult();
}

}