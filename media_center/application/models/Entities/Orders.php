<?php

namespace Entities;

/**
 * Orders
 */
class Orders
{
    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var integer
     */
    private $shippingTypeId;

    /**
     * @var boolean
     */
    private $paymentTypeId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $addressId;

    /**
     * @var integer
     */
    private $paymentId;

    /**
     * @var boolean
     */
    private $orderStatus;

    /**
     * @var \DateTime
     */
    private $orderDate;

    /**
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @var float
     */
    private $total;

    /**
     * @var string
     */
    private $paymentKey;

    /**
     * @var string
     */
    private $paymentCode;


    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set shippingTypeId
     *
     * @param integer $shippingTypeId
     *
     * @return Orders
     */
    public function setShippingTypeId($shippingTypeId)
    {
        $this->shippingTypeId = $shippingTypeId;

        return $this;
    }

    /**
     * Get shippingTypeId
     *
     * @return integer
     */
    public function getShippingTypeId()
    {
        return $this->shippingTypeId;
    }

    /**
     * Set paymentTypeId
     *
     * @param boolean $paymentTypeId
     *
     * @return Orders
     */
    public function setPaymentTypeId($paymentTypeId)
    {
        $this->paymentTypeId = $paymentTypeId;

        return $this;
    }

    /**
     * Get paymentTypeId
     *
     * @return boolean
     */
    public function getPaymentTypeId()
    {
        return $this->paymentTypeId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Orders
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     *
     * @return Orders
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set paymentId
     *
     * @param integer $paymentId
     *
     * @return Orders
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * Get paymentId
     *
     * @return integer
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * Set orderStatus
     *
     * @param boolean $orderStatus
     *
     * @return Orders
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return boolean
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return Orders
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     *
     * @return Orders
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Orders
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set paymentKey
     *
     * @param string $paymentKey
     *
     * @return Orders
     */
    public function setPaymentKey($paymentKey)
    {
        $this->paymentKey = $paymentKey;

        return $this;
    }

    /**
     * Get paymentKey
     *
     * @return string
     */
    public function getPaymentKey()
    {
        return $this->paymentKey;
    }

    /**
     * Set paymentCode
     *
     * @param string $paymentCode
     *
     * @return Orders
     */
    public function setPaymentCode($paymentCode)
    {
        $this->paymentCode = $paymentCode;

        return $this;
    }

    /**
     * Get paymentCode
     *
     * @return string
     */
    public function getPaymentCode()
    {
        return $this->paymentCode;
    }
}

