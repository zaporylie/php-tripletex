<?php

namespace zaporylie\Tripletex\Model\Product;

use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\IdTrait;
use zaporylie\Tripletex\Model\RevisionTrait;
use zaporylie\Tripletex\Model\UrlTrait;

class Product implements ModelInterface
{
    use IdTrait;
    use RevisionTrait;
    use UrlTrait;

    /**
     * Product name.
     *
     * @var string
     */
    protected $name;

    /**
     * Product SKU.
     *
     * @var string
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
