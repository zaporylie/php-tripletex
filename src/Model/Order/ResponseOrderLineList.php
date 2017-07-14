<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseOrderLineList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Order\OrderLine[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Order\OrderLine>")
     */
    protected $values;

    /**
     * Gets values value.
     *
     * @return \zaporylie\Tripletex\Model\Order\OrderLine[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets values variable.
     *
     * @param \zaporylie\Tripletex\Model\Order\OrderLine[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
