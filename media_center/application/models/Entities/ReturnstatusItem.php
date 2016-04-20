<?php

namespace Entities;

/**
 * ReturnstatusItem
 */
class ReturnstatusItem
{
    /**
     * @var integer
     */
    private $returnId;

    /**
     * @var integer
     */
    private $itemId;


    /**
     * Set returnId
     *
     * @param integer $returnId
     *
     * @return ReturnstatusItem
     */
    public function setReturnId($returnId)
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * Get returnId
     *
     * @return integer
     */
    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return ReturnstatusItem
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

