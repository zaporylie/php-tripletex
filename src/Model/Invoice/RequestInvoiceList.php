<?php

namespace zaporylie\Tripletex\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class RequestInvoiceList implements ModelInterface
{

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $invoiceDateFrom;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $invoiceDateTo;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoiceNumber;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $kid;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $voucherId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $customerId;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $from;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $count;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $sorting;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $fields;

    /**
     * Gets id value.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id variable.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets number value.
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Sets number variable.
     *
     * @param string $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * Gets customerId value.
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Sets customerId variable.
     *
     * @param string $customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * Gets voucherId value.
     *
     * @return int
     */
    public function getVoucherId()
    {
        return $this->voucherId;
    }

    /**
     * Sets voucherId variable.
     *
     * @param int $voucherId
     *
     * @return $this
     */
    public function setVoucherId($voucherId)
    {
        $this->voucherId = $voucherId;
        return $this;
    }

    /**
     * Gets kid value.
     *
     * @return int
     */
    public function getKid()
    {
        return $this->kid;
    }

    /**
     * Sets kid variable.
     *
     * @param int $kid
     *
     * @return $this
     */
    public function setKid($kid)
    {
        $this->kid = $kid;
        return $this;
    }

    /**
     * Gets invoiceDateFrom value.
     *
     * @return \DateTimeInterface
     */
    public function getInvoiceDateFrom()
    {
        return $this->invoiceDateFrom;
    }

    /**
     * Sets invoiceDateFrom variable.
     *
     * @param \DateTimeInterface $invoiceDateFrom
     *
     * @return $this
     */
    public function setInvoiceDateFrom(\DateTimeInterface $invoiceDateFrom)
    {
        $this->invoiceDateFrom = $invoiceDateFrom;
        return $this;
    }

    /**
     * Gets invoiceDateTo value.
     *
     * @return \DateTimeInterface
     */
    public function getInvoiceDateTo()
    {
        return $this->invoiceDateTo;
    }

    /**
     * Sets invoiceDateTo variable.
     *
     * @param \DateTimeInterface $invoiceDateTo
     *
     * @return $this
     */
    public function setInvoiceDateTo(\DateTimeInterface $invoiceDateTo)
    {
        $this->invoiceDateTo = $invoiceDateTo;
        return $this;
    }

    /**
     * Gets from value.
     *
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets from variable.
     *
     * @param int $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets count value.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets count variable.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets sorting value.
     *
     * @return string
     */
    public function getSorting()
    {
        return $this->sorting;
    }

    /**
     * Sets sorting variable.
     *
     * @param string $sorting
     *
     * @return $this
     */
    public function setSorting($sorting)
    {
        $this->sorting = $sorting;
        return $this;
    }

    /**
     * Gets fields value.
     *
     * @return string
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets fields variable.
     *
     * @param string $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }
}
