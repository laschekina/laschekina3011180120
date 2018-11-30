<?php
/**
 * Created by PhpStorm.
 * User: laschekina
 * Date: 10/09/2018
 * Time: 23:47
 */
namespace LSI\MarketBundle\Repository;

class MessageRepository extends \Doctrine\ORM\EntityRepository
{
    // Recuperer les messages propres aux utilisateurs

    public function findmsgEnvoyes($iduser){
        $req = $this->createQueryBuilder('m');
            $req->innerJoin('m.user', 'u')
                ->addSelect('u');
            $req->where('u.id= :id')
                ->setParameter('id', $iduser);

            return $req->getQuery()->getResult();
    }
}