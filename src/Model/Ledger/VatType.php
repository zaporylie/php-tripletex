<?php

namespace zaporylie\Tripletex\Model\Ledger;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class VatType implements ModelInterface
{

    use ModelTrait;
    use NameTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $number; // (string, optional),

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $percentage; // (number, optional)

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
     * Gets percentage value.
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets percentage variable.
     *
     * @param float $percentage
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }
}
