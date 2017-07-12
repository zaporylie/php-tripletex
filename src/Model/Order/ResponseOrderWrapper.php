<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseOrderWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Order\Order
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Order\Order")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Order\Order
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Order\Order $value
     *
     * @return $this
     */
    public function setValue(Order $value)
    {
        $this->value = $value;
        return $this;
    }
}
