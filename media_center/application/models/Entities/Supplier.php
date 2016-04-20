<?php

namespace Entities;

/**
 * Supplier
 */
class Supplier
{
    /**
     * @var integer
     */
    private $supplierId;

    /**
     * @var string
     */
    private $supplierName;

    /**
     * @var string
     */
    private $supplierType;


    /**
     * Get supplierId
     *
     * @return integer
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * Set supplierName
     *
     * @param string $supplierName
     *
     * @return Supplier
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;

        return $this;
    }

    /**
     * Get supplierName
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * Set supplierType
     *
     * @param string $supplierType
     *
     * @return Supplier
     */
    public function setSupplierType($supplierType)
    {
        $this->supplierType = $supplierType;

        return $this;
    }

    /**
     * Get supplierType
     *
     * @return string
     */
    public function getSupplierType()
    {
        return $this->supplierType;
    }
}

