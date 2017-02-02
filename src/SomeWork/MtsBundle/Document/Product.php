<?php

namespace SomeWork\MtsBundle\Document;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * SomeWork\MtsBundle\Document\Product
 * @ODM\Document(db="mts", collection="products")
 */
class Product
{
    /**
     * @var $id
     * @ODM\Id(strategy="NONE", type="int")
     */
    protected $id;

    /**
     * @var string $url
     * @ODM\Field(type="string")
     */
    protected $url;

    /**
     * @var array $pictures
     * @ODM\Field(type="collection")
     */
    protected $pictures;

    /**
     * @var boolean $pickup
     * @ODM\Field(type="boolean")
     */
    protected $pickup;

    /**
     * @var boolean $delivery
     * @ODM\Field(type="boolean")
     */
    protected $delivery;

    /**
     * @var string $vendor
     * @ODM\Field(type="string")
     */
    protected $vendor;

    /**
     * @var string $model
     * @ODM\Field(type="string")
     */
    protected $model;

    /**
     * @var boolean $manufacturer_warranty
     * @ODM\Field(type="boolean")
     */
    protected $manufacturer_warranty;

    /**
     * @var string $description
     * @ODM\Field(type="string")
     */
    protected $description;

    /**
     * @var boolean $available
     * @ODM\Field(type="boolean")
     */
    protected $available;

    /**
     * @var Category
     * @ODM\ReferenceOne(
     *     cascade="all",
     *     targetDocument="\SomeWork\MtsBundle\Document\Category",
     *     storeAs="dbRef",
     * )
     */
    protected $category;

    /**
     * @var Collection
     * @ODM\ReferenceMany(
     *     cascade="all",
     *     targetDocument="\SomeWork\MtsBundle\Document\Offer",
     *     storeAs="dbRef",
     *     strategy="addToSet"
     * )
     */
    protected $offers = [];

    public function __construct(int $id)
    {
        $this->offers = new ArrayCollection();
        $this->setId($id);
    }

    /**
     * Get id
     *
     * @return string $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get pictures
     *
     * @return array $pictures
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Set pictures
     *
     * @param array $pictures
     *
     * @return $this
     */
    public function setPictures(array $pictures)
    {
        $this->pictures = $pictures;
        return $this;
    }

    /**
     * Get pickup
     *
     * @return boolean $pickup
     */
    public function getPickup()
    {
        return $this->pickup;
    }

    /**
     * Set pickup
     *
     * @param boolean $pickup
     *
     * @return $this
     */
    public function setPickup($pickup)
    {
        $this->pickup = $pickup;
        return $this;
    }

    /**
     * Get delivery
     *
     * @return boolean $delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set delivery
     *
     * @param boolean $delivery
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Get vendor
     *
     * @return string $vendor
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Get model
     *
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Get manufacturerWarranty
     *
     * @return boolean $manufacturerWarranty
     */
    public function getManufacturerWarranty()
    {
        return $this->manufacturer_warranty;
    }

    /**
     * Set manufacturerWarranty
     *
     * @param boolean $manufacturerWarranty
     *
     * @return $this
     */
    public function setManufacturerWarranty($manufacturerWarranty)
    {
        $this->manufacturer_warranty = $manufacturerWarranty;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get available
     *
     * @return boolean $available
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set available
     *
     * @param boolean $available
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * Get category
     *
     * @return Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set category
     *
     * @param Category $category
     *
     * @return $this
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
        $category->addProduct($this);
        return $this;
    }

    /**
     * Add offer
     *
     * @param Offer $offer
     */
    public function addOffer(Offer $offer)
    {
        if (!$this->offers->contains($offer)) {
            $this->offers->add($offer);
            $offer->setProduct($this);
        }
    }

    /**
     * Remove offer
     *
     * @param Offer $offer
     */
    public function removeOffer(Offer $offer)
    {
        $this->offers->removeElement($offer);
    }

    /**
     * Get offers
     *
     * @return Collection $offers
     */
    public function getOffers()
    {
        return $this->offers;
    }
}
