<?php

namespace EPS\DemoBundle\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends EntityRepository
{

    public function findAjaxValue($value)
    {
        $qb = $this->createQueryBuilder('p')->where('p.title like :title')->setParameter('title', '%' . $value . '%')->setMaxResults(10);
        ;

        return $qb->getQuery()->getResult();
    }
}
