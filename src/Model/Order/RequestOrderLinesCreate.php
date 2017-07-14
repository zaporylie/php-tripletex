<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class RequestOrderLinesCreate implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Order\OrderLine[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Order\OrderLine>")
     */
    protected $orderLine;

    /**
     * Gets orderLine value.
     *
     * @return \zaporylie\Tripletex\Model\Order\OrderLine[]
     */
    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * Sets orderLine variable.
     *
     * @param \zaporylie\Tripletex\Model\Order\OrderLine[] $orderLine
     *
     * @return $this
     */
    public function setOrderLine(array $orderLine)
    {
        $this->orderLine = $orderLine;
        return $this;
    }
}
