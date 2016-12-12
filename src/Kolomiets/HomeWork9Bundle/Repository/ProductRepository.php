<?php

namespace Kolomiets\HomeWork9Bundle\Repository;

/**
 * ProductRepository
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM KolomietsHomeWork9Bundle:Product p ORDER BY p.name ASC'
            )
            ->getResult();
    }
}
