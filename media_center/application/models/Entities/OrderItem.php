<?php

namespace Entities;

/**
 * OrderItem
 */
class OrderItem
{
    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var integer
     */
    private $orderId;


    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return OrderItem
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

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
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OrderItem
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
}

