<?php

namespace SomeWork\MtsBundle\Document;



/**
 * SomeWork\MtsBundle\Document\Category
 */
class Category
{
    /**
     * @var $id
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var SomeWork\MtsBundle\Document\Category
     */
    protected $parentsCategory = array();

    /**
     * @var SomeWork\MtsBundle\Document\Category
     */
    protected $childrenCategory = array();

    /**
     * @var SomeWork\MtsBundle\Document\Product
     */
    protected $products = array();

    public function __construct()
    {
        $this->parentsCategory = new \Doctrine\Common\Collections\ArrayCollection();
        $this->childrenCategory = new \Doctrine\Common\Collections\ArrayCollection();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add parentsCategory
     *
     * @param SomeWork\MtsBundle\Document\Category $parentsCategory
     */
    public function addParentsCategory(\SomeWork\MtsBundle\Document\Category $parentsCategory)
    {
        $this->parentsCategory[] = $parentsCategory;
    }

    /**
     * Remove parentsCategory
     *
     * @param SomeWork\MtsBundle\Document\Category $parentsCategory
     */
    public function removeParentsCategory(\SomeWork\MtsBundle\Document\Category $parentsCategory)
    {
        $this->parentsCategory->removeElement($parentsCategory);
    }

    /**
     * Get parentsCategory
     *
     * @return \Doctrine\Common\Collections\Collection $parentsCategory
     */
    public function getParentsCategory()
    {
        return $this->parentsCategory;
    }

    /**
     * Add childrenCategory
     *
     * @param SomeWork\MtsBundle\Document\Category $childrenCategory
     */
    public function addChildrenCategory(\SomeWork\MtsBundle\Document\Category $childrenCategory)
    {
        $this->childrenCategory[] = $childrenCategory;
    }

    /**
     * Remove childrenCategory
     *
     * @param SomeWork\MtsBundle\Document\Category $childrenCategory
     */
    public function removeChildrenCategory(\SomeWork\MtsBundle\Document\Category $childrenCategory)
    {
        $this->childrenCategory->removeElement($childrenCategory);
    }

    /**
     * Get childrenCategory
     *
     * @return \Doctrine\Common\Collections\Collection $childrenCategory
     */
    public function getChildrenCategory()
    {
        return $this->childrenCategory;
    }

    /**
     * Add product
     *
     * @param SomeWork\MtsBundle\Document\Product $product
     */
    public function addProduct(\SomeWork\MtsBundle\Document\Product $product)
    {
        $this->products[] = $product;
    }

    /**
     * Remove product
     *
     * @param SomeWork\MtsBundle\Document\Product $product
     */
    public function removeProduct(\SomeWork\MtsBundle\Document\Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection $products
     */
    public function getProducts()
    {
        return $this->products;
    }
}
