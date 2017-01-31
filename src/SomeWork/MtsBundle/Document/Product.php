<?php

namespace SomeWork\MtsBundle\Document;



/**
 * SomeWork\MtsBundle\Document\Product
 */
class Product
{
    /**
     * @var $id
     */
    protected $id;

    /**
     * @var string $url
     */
    protected $url;

    /**
     * @var array $pictures
     */
    protected $pictures;

    /**
     * @var boolean $pickup
     */
    protected $pickup;

    /**
     * @var boolean $delivery
     */
    protected $delivery;

    /**
     * @var string $vendor
     */
    protected $vendor;

    /**
     * @var string $model
     */
    protected $model;

    /**
     * @var boolean $manufacturer_warranty
     */
    protected $manufacturer_warranty;

    /**
     * @var string $description
     */
    protected $description;

    /**
     * @var boolean $available
     */
    protected $available;

    /**
     * @var SomeWork\MtsBundle\Document\Category
     */
    protected $category;

    /**
     * @var SomeWork\MtsBundle\Document\Offer
     */
    protected $offers = array();

    public function __construct()
    {
        $this->offers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set id
     *
     * @param string $id
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
     * @return string $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
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
     * Set pictures
     *
     * @param array $pictures
     * @return $this
     */
    public function setPictures(\array $pictures)
    {
        $this->pictures = $pictures;
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
     * Set pickup
     *
     * @param boolean $pickup
     * @return $this
     */
    public function setPickup($pickup)
    {
        $this->pickup = $pickup;
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
     * Set delivery
     *
     * @param boolean $delivery
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
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
     * Set vendor
     *
     * @param string $vendor
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
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
     * Set model
     *
     * @param string $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;
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
     * Set manufacturerWarranty
     *
     * @param boolean $manufacturerWarranty
     * @return $this
     */
    public function setManufacturerWarranty($manufacturerWarranty)
    {
        $this->manufacturer_warranty = $manufacturerWarranty;
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
     * Set description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Set available
     *
     * @param boolean $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
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
     * Set category
     *
     * @param SomeWork\MtsBundle\Document\Category $category
     * @return $this
     */
    public function setCategory(\SomeWork\MtsBundle\Document\Category $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return SomeWork\MtsBundle\Document\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add offer
     *
     * @param SomeWork\MtsBundle\Document\Offer $offer
     */
    public function addOffer(\SomeWork\MtsBundle\Document\Offer $offer)
    {
        $this->offers[] = $offer;
    }

    /**
     * Remove offer
     *
     * @param SomeWork\MtsBundle\Document\Offer $offer
     */
    public function removeOffer(\SomeWork\MtsBundle\Document\Offer $offer)
    {
        $this->offers->removeElement($offer);
    }

    /**
     * Get offers
     *
     * @return \Doctrine\Common\Collections\Collection $offers
     */
    public function getOffers()
    {
        return $this->offers;
    }
}
