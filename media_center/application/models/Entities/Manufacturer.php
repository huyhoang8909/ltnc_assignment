<?php

namespace Entities;

/**
 * Manufacturer
 */
class Manufacturer
{
    /**
     * @var integer
     */
    private $manufacturerId;

    /**
     * @var string
     */
    private $manufacturerName;


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
     * Set manufacturerName
     *
     * @param string $manufacturerName
     *
     * @return Manufacturer
     */
    public function setManufacturerName($manufacturerName)
    {
        $this->manufacturerName = $manufacturerName;

        return $this;
    }

    /**
     * Get manufacturerName
     *
     * @return string
     */
    public function getManufacturerName()
    {
        return $this->manufacturerName;
    }
}

