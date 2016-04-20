<?php

namespace Entities;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $categoryCategoryId;

    /**
     * @var string
     */
    private $categoryName;


    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set categoryCategoryId
     *
     * @param integer $categoryCategoryId
     *
     * @return Category
     */
    public function setCategoryCategoryId($categoryCategoryId)
    {
        $this->categoryCategoryId = $categoryCategoryId;

        return $this;
    }

    /**
     * Get categoryCategoryId
     *
     * @return integer
     */
    public function getCategoryCategoryId()
    {
        return $this->categoryCategoryId;
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
}

