<?php

namespace Entities;

/**
 * ItemSupplier
 */
class ItemSupplier
{
    /**
     * @var integer
     */
    private $supplierId;

    /**
     * @var integer
     */
    private $itemId;


    /**
     * Set supplierId
     *
     * @param integer $supplierId
     *
     * @return ItemSupplier
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;

        return $this;
    }

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
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return ItemSupplier
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
}

