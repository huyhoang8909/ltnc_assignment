<?php

namespace Entities;

/**
 * Reviews
 */
class Reviews
{
    /**
     * @var integer
     */
    private $reviewId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var boolean
     */
    private $rating;

    /**
     * @var string
     */
    private $comment;


    /**
     * Get reviewId
     *
     * @return integer
     */
    public function getReviewId()
    {
        return $this->reviewId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Reviews
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
     * @return Reviews
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
     * Set rating
     *
     * @param boolean $rating
     *
     * @return Reviews
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return boolean
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Reviews
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

