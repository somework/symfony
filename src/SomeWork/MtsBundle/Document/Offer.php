<?php

namespace SomeWork\MtsBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


/**
 * SomeWork\MtsBundle\Document\Offer
 * @ODM\Document(db="mts", collection="offers")
 */
class Offer
{
    /**
     * @var $id
     * @ODM\Id(strategy="INCREMENT", type="int")
     */
    protected $id;

    /**
     * @var int $price
     * @ODM\Field(type="int")
     */
    protected $price;

    /**
     * @var string $currencyId
     * @ODM\Field(type="string")
     */
    protected $currencyId;

    /**
     * @var Product
     * @ODM\ReferenceOne(
     *     cascade="all",
     *     targetDocument="\SomeWork\MtsBundle\Document\Product",
     *     storeAs="dbRef",
     * )
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
     * Get price
     *
     * @return int $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price
     *
     * @param int $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return $this
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * Get product
     *
     * @return Product $product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set product
     *
     * @param Product $product
     *
     * @return $this
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
        $product->addOffer($this);
        return $this;
    }
}
