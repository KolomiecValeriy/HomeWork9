<?php

namespace Kolomiets\HomeWork9Bundle\Repository;

/**
 * CategoryRepository
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM KolomietsHomeWork9Bundle:Category c
                ORDER BY c.name ASC'
            )
            ->getResult();
    }

//select c, cg from category c join c.categoryGroupId cg where c.id=3
    public function findOneByIdJoinedCategoryGroup($categoryGroupId)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT c, cg FROM category c 
                JOIN c.categoryGroup cg
                WHERE c.id= :id'
            )
            ->setParameter('id', $categoryGroupId);

        return $query->getSingleResult();
    }
}
