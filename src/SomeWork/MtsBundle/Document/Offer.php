<?php

namespace SomeWork\MtsBundle\Document;



/**
 * SomeWork\MtsBundle\Document\Offer
 */
class Offer
{
    /**
     * @var $id
     */
    protected $id;

    /**
     * @var int $price
     */
    protected $price;

    /**
     * @var string $currencyId
     */
    protected $currencyId;

    /**
     * @var SomeWork\MtsBundle\Document\Product
     */
    protected $product;


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
     * Set price
     *
     * @param int $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return int $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     * @return $this
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * Get currencyId
     *
     * @return string $currencyId
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set product
     *
     * @param SomeWork\MtsBundle\Document\Product $product
     * @return $this
     */
    public function setProduct(\SomeWork\MtsBundle\Document\Product $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Get product
     *
     * @return SomeWork\MtsBundle\Document\Product $product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
