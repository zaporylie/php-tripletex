<?php

namespace zaporylie\Tripletex\Model\Product;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class RequestProductList implements ModelInterface
{

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
    protected $name;

    /**
     * @var string
     *
     * @Serializer\Type("string")
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
     * Gets from value.
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets from variable.
     *
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;
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
     * Gets name value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name variable.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
}
