<?php

namespace zaporylie\Tripletex\Model\Product;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class Product implements ModelInterface
{
    use ModelTrait;
    use NameTrait;

    /**
     * Product SKU.
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $number;

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
