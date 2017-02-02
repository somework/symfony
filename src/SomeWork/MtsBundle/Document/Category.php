<?php

namespace SomeWork\MtsBundle\Document;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Category
 * @ODM\Document(db="mts", collection="categories")
 * @ODM\UniqueIndex(keys={"id"="asc", "name"="asc"})
 */
class Category
{
    /**
     * @var int $id
     * @ODM\Id(strategy="NONE", type="int")
     */
    protected $id;

    /**
     * @var string $name
     * @ODM\Field(type="string")
     */
    protected $name;

    /**
     * @var Collection|Category[]
     * @ODM\ReferenceMany(
     *     cascade="all",
     *     targetDocument="\SomeWork\MtsBundle\Document\Category",
     *     storeAs="id",
     *     strategy="setArray",
     *     mappedBy="childrenCategory"
     * )
     */
    protected $parentsCategory = [];

    /**
     * @var Collection|Category[]
     * @ODM\ReferenceMany(
     *     cascade="all",
     *     targetDocument="\SomeWork\MtsBundle\Document\Category",
     *     storeAs="id",
     *     strategy="setArray",
     *     inversedBy="parentsCategory"
     * )
     */
    protected $childrenCategory = [];

    /**
     * @var Collection|Product[]
     * @ODM\ReferenceMany(
     *     cascade="all",
     *     targetDocument="\SomeWork\MtsBundle\Document\Product",
     *     storeAs="dbRef",
     *     strategy="setArray"
     * )
     */
    protected $products = [];

    public function __construct(int $id)
    {
        $this->parentsCategory = new ArrayCollection();
        $this->childrenCategory = new ArrayCollection();
        $this->products = new ArrayCollection();
        $this->setId($id);
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
     * Set name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Add parentsCategory
     *
     * @param Category $parentsCategory
     */
    public function addParentsCategory(Category $parentsCategory)
    {
        if (!$this->parentsCategory->contains($parentsCategory)) {
            $this->parentsCategory->add($parentsCategory);
            $parentsCategory->addChildrenCategory($this);
        }
    }

    /**
     * Add childrenCategory
     *
     * @param Category $childrenCategory
     */
    public function addChildrenCategory(Category $childrenCategory)
    {
        if (!$this->childrenCategory->contains($childrenCategory)) {
            $this->childrenCategory->add($childrenCategory);
            $childrenCategory->addParentsCategory($this);
        }
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
     * Set id
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Remove parentsCategory
     *
     * @param Category $parentsCategory
     */
    public function removeParentsCategory(Category $parentsCategory)
    {
        if ($this->parentsCategory->removeElement($parentsCategory)) {
            $this->removeChildrenCategory($this);
        }
    }

    /**
     * Remove childrenCategory
     *
     * @param Category $childrenCategory
     */
    public function removeChildrenCategory(Category $childrenCategory)
    {
        if ($this->childrenCategory->removeElement($childrenCategory)) {
            $childrenCategory->removeParentsCategory($this);
        }
    }

    /**
     * Get parentsCategory
     *
     * @return Collection $parentsCategory
     */
    public function getParentsCategory()
    {
        return $this->parentsCategory;
    }

    /**
     * Get childrenCategory
     *
     * @return Collection $childrenCategory
     */
    public function getChildrenCategory()
    {
        return $this->childrenCategory;
    }

    /**
     * Add product;
     *
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setCategory($this);
        }
    }

    /**
     * Remove product
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return Collection $products
     */
    public function getProducts()
    {
        return $this->products;
    }
}
