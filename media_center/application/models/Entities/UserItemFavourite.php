<?php

namespace Entities;

/**
 * UserItemFavourite
 */
class UserItemFavourite
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $itemId;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return UserItemFavourite
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
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return UserItemFavourite
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

