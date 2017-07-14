<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseOrderLineWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Order\OrderLine
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Order\OrderLine")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Order\OrderLine
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Order\OrderLine $value
     *
     * @return $this
     */
    public function setValue(OrderLine $value)
    {
        $this->value = $value;
        return $this;
    }
}
