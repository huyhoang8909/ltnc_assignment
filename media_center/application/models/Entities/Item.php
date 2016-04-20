<?php

namespace Entities;

/**
 * Item
 */
class Item
{
    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var integer
     */
    private $manufacturerId;

    /**
     * @var integer
     */
    private $promotionId;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var string
     */
    private $itemName;

    /**
     * @var float
     */
    private $itemPrice;

    /**
     * @var integer
     */
    private $itemQuantity;


    /**
     * Get itemId
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return Item
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * Get manufacturerId
     *
     * @return integer
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set promotionId
     *
     * @param integer $promotionId
     *
     * @return Item
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;

        return $this;
    }

    /**
     * Get promotionId
     *
     * @return integer
     */
    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Item
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set itemName
     *
     * @param string $itemName
     *
     * @return Item
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set itemPrice
     *
     * @param float $itemPrice
     *
     * @return Item
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;

        return $this;
    }

    /**
     * Get itemPrice
     *
     * @return float
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Set itemQuantity
     *
     * @param integer $itemQuantity
     *
     * @return Item
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->itemQuantity = $itemQuantity;

        return $this;
    }

    /**
     * Get itemQuantity
     *
     * @return integer
     */
    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }
}

