<?php

namespace zaporylie\Tripletex\Model\Product;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class Product implements ModelInterface
{
    use ModelTrait;

    /**
     * Product name.
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * Product SKU.
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $number;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
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
     * @return $this;
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}
