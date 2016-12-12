<?php

namespace Kolomiets\HomeWork9Bundle\Repository;

/**
 * CategoryGroupRepository
 */
class CategoryGroupRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function findAllOrderedByName()
    {
//        $repository = $this->_em->getRepository('KolomietsHomeWork9Bundle:CategoryGroup');

        $query = $this->createQueryBuilder('cg')
            ->from('KolomietsHomeWork9Bundle:CategoryGroup')
            ->orderBy('cg.name', 'ASC')
            ->getQuery();

        return $query->getResult();
//        return $this->getEntityManager()
//            ->createQuery(
//                'SELECT cg FROM KolomietsHomeWork9Bundle:CategoryGroup cg ORDER BY cg.name ASC'
//            )
//            ->getResult();
    }
}
