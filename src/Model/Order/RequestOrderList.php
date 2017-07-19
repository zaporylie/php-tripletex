<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class RequestOrderList implements ModelInterface
{

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $number;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $customerId;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $orderDateFrom;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $orderDateTo;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isClosed;

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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets number variable.
     *
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
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
     * Gets orderDateFrom value.
     *
     * @return \DateTimeInterface
     */
    public function getOrderDateFrom()
    {
        return $this->orderDateFrom;
    }

    /**
     * Sets orderDateFrom variable.
     *
     * @param \DateTimeInterface $orderDateFrom
     *
     * @return $this
     */
    public function setOrderDateFrom(\DateTimeInterface $orderDateFrom)
    {
        $this->orderDateFrom = $orderDateFrom;
        return $this;
    }

    /**
     * Gets orderDateTo value.
     *
     * @return \DateTimeInterface
     */
    public function getOrderDateTo()
    {
        return $this->orderDateTo;
    }

    /**
     * Sets orderDateTo variable.
     *
     * @param \DateTimeInterface $orderDateTo
     *
     * @return $this
     */
    public function setOrderDateTo(\DateTimeInterface $orderDateTo)
    {
        $this->orderDateTo = $orderDateTo;
        return $this;
    }

    /**
     * Gets isClosed value.
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Sets isClosed variable.
     *
     * @param bool $isClosed
     *
     * @return $this
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
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
