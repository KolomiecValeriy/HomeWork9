<?php

namespace Kolomiets\HomeWork9Bundle\Repository;

/**
 * UserRepository
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM KolomietsHomeWork9Bundle:User u ORDER BY u.name ASC'
            )
            ->getResult();
    }
}
