<?php

namespace Entities;

/**
 * CartItem
 */
class CartItem
{
    /**
     * @var integer
     */
    private $cartId;

    /**
     * @var integer
     */
    private $itemId;


    /**
     * Set cartId
     *
     * @param integer $cartId
     *
     * @return CartItem
     */
    public function setCartId($cartId)
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * Get cartId
     *
     * @return integer
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return CartItem
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

