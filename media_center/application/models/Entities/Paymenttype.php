<?php

namespace Entities;

/**
 * Paymenttype
 */
class Paymenttype
{
    /**
     * @var boolean
     */
    private $paymentTypeId;

    /**
     * @var string
     */
    private $paymentTypeDesc;


    /**
     * Get paymentTypeId
     *
     * @return boolean
     */
    public function getPaymentTypeId()
    {
        return $this->paymentTypeId;
    }

    /**
     * Set paymentTypeDesc
     *
     * @param string $paymentTypeDesc
     *
     * @return Paymenttype
     */
    public function setPaymentTypeDesc($paymentTypeDesc)
    {
        $this->paymentTypeDesc = $paymentTypeDesc;

        return $this;
    }

    /**
     * Get paymentTypeDesc
     *
     * @return string
     */
    public function getPaymentTypeDesc()
    {
        return $this->paymentTypeDesc;
    }
}

