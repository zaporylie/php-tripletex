<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class RequestInvoiceCreate implements ModelInterface
{

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $orderId;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $invoiceDate;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $sendToCustomer;

    /**
     * Gets orderId value.
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId variable.
     *
     * @param int $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * Gets invoiceDate value.
     *
     * @return \DateTimeInterface
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Sets invoiceDate variable.
     *
     * @param \DateTimeInterface $invoiceDate
     *
     * @return $this
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Gets sendToCustomer value.
     *
     * @return bool
     */
    public function getSendToCustomer()
    {
        return $this->sendToCustomer;
    }

    /**
     * Sets sendToCustomer variable.
     *
     * @param bool $sendToCustomer
     *
     * @return $this
     */
    public function setSendToCustomer($sendToCustomer)
    {
        $this->sendToCustomer = $sendToCustomer;
        return $this;
    }
}
