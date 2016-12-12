<?php

namespace Kolomiets\HomeWork9Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="Kolomiets\HomeWork9Bundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="CategoryGroup", inversedBy="categories")
     * @ORM\JoinColumn(name="categoryGroup", referencedColumnName="id")
     */
    private $categoryGroupId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set categoryGroupId
     *
     * @param integer $categoryGroupId
     *
     * @return Category
     */
    public function setCategoryGroupId($categoryGroupId)
    {
        $this->categoryGroupId = $categoryGroupId;

        return $this;
    }

    /**
     * Get categoryGroupId
     *
     * @return int
     */
    public function getCategoryGroupId()
    {
        return $this->categoryGroupId;
    }
}
