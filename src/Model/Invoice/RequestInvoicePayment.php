<?php

namespace zaporylie\Tripletex\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class RequestInvoicePayment implements ModelInterface
{

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $invoiceId;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $paymentDate;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $paymentTypeId;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $paidAmount;

    /**
     * Gets invoiceId value.
     *
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Sets invoiceId variable.
     *
     * @param int $invoiceId
     *
     * @return $this
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * Gets paymentDate value.
     *
     * @return \DateTimeInterface
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Sets paymentDate variable.
     *
     * @param \DateTimeInterface $paymentDate
     *
     * @return $this
     */
    public function setPaymentDate(\DateTimeInterface $paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Gets paymentTypeId value.
     *
     * @return int
     */
    public function getPaymentTypeId()
    {
        return $this->paymentTypeId;
    }

    /**
     * Sets paymentTypeId variable.
     *
     * @param int $paymentTypeId
     *
     * @return $this
     */
    public function setPaymentTypeId($paymentTypeId)
    {
        $this->paymentTypeId = $paymentTypeId;
        return $this;
    }

    /**
     * Gets paidAmount value.
     *
     * @return float
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * Sets paidAmount variable.
     *
     * @param float $paidAmount
     *
     * @return $this
     */
    public function setPaidAmount($paidAmount)
    {
        $this->paidAmount = $paidAmount;
        return $this;
    }
}
