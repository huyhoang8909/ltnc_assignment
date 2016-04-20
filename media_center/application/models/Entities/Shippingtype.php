<?php

namespace Entities;

/**
 * Shippingtype
 */
class Shippingtype
{
    /**
     * @var integer
     */
    private $shippingTypeId;

    /**
     * @var string
     */
    private $shippingTypeName;

    /**
     * @var float
     */
    private $shippingCost;

    /**
     * @var boolean
     */
    private $shippingDays;


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
     * Set shippingTypeName
     *
     * @param string $shippingTypeName
     *
     * @return Shippingtype
     */
    public function setShippingTypeName($shippingTypeName)
    {
        $this->shippingTypeName = $shippingTypeName;

        return $this;
    }

    /**
     * Get shippingTypeName
     *
     * @return string
     */
    public function getShippingTypeName()
    {
        return $this->shippingTypeName;
    }

    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     *
     * @return Shippingtype
     */
    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    /**
     * Get shippingCost
     *
     * @return float
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Set shippingDays
     *
     * @param boolean $shippingDays
     *
     * @return Shippingtype
     */
    public function setShippingDays($shippingDays)
    {
        $this->shippingDays = $shippingDays;

        return $this;
    }

    /**
     * Get shippingDays
     *
     * @return boolean
     */
    public function getShippingDays()
    {
        return $this->shippingDays;
    }
}

