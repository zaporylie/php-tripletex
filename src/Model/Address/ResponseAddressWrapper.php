<?php

namespace zaporylie\Tripletex\Model\Address;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseAddressWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Address\Address
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Address\Address")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Address\Address
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Address\Address $value
     *
     * @return $this
     */
    public function setValue(Address $value)
    {
        $this->value = $value;
        return $this;
    }
}
