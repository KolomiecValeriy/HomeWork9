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
        return $this->getEntityManager()
            ->createQuery(
                'SELECT cg FROM KolomietsHomeWork9Bundle:CategoryGroup cg ORDER BY cg.name ASC'
            )
            ->getResult();
    }
}
