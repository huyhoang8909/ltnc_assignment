<?php

namespace Entities;

/**
 * Trackingtable
 */
class Trackingtable
{
    /**
     * @var integer
     */
    private $trackingId;

    /**
     * @var string
     */
    private $position;

    /**
     * @var \DateTime
     */
    private $time;


    /**
     * Set trackingId
     *
     * @param integer $trackingId
     *
     * @return Trackingtable
     */
    public function setTrackingId($trackingId)
    {
        $this->trackingId = $trackingId;

        return $this;
    }

    /**
     * Get trackingId
     *
     * @return integer
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Trackingtable
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return Trackingtable
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }
}

