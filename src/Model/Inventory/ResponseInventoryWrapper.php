<?php

namespace zaporylie\Tripletex\Model\Inventory;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseInventoryWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Inventory\Inventory
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Inventory\Inventory")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Inventory\Inventory
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Inventory\Inventory $value
     *
     * @return $this
     */
    public function setValue(Inventory $value)
    {
        $this->value = $value;
        return $this;
    }
}
