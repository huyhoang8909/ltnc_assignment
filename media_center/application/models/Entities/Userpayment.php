<?php

namespace Entities;

/**
 * Userpayment
 */
class Userpayment
{
    /**
     * @var integer
     */
    private $paymentId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $cardName;

    /**
     * @var string
     */
    private $creditCardNumber;

    /**
     * @var integer
     */
    private $securityNumber;

    /**
     * @var string
     */
    private $expDate;


    /**
     * Get paymentId
     *
     * @return integer
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Userpayment
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
     * Set cardName
     *
     * @param string $cardName
     *
     * @return Userpayment
     */
    public function setCardName($cardName)
    {
        $this->cardName = $cardName;

        return $this;
    }

    /**
     * Get cardName
     *
     * @return string
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * Set creditCardNumber
     *
     * @param string $creditCardNumber
     *
     * @return Userpayment
     */
    public function setCreditCardNumber($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;

        return $this;
    }

    /**
     * Get creditCardNumber
     *
     * @return string
     */
    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

    /**
     * Set securityNumber
     *
     * @param integer $securityNumber
     *
     * @return Userpayment
     */
    public function setSecurityNumber($securityNumber)
    {
        $this->securityNumber = $securityNumber;

        return $this;
    }

    /**
     * Get securityNumber
     *
     * @return integer
     */
    public function getSecurityNumber()
    {
        return $this->securityNumber;
    }

    /**
     * Set expDate
     *
     * @param string $expDate
     *
     * @return Userpayment
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }

    /**
     * Get expDate
     *
     * @return string
     */
    public function getExpDate()
    {
        return $this->expDate;
    }
}

