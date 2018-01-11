<?php

namespace zaporylie\Tripletex\Model\Inventory;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseInventoryList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Inventory\Inventory[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Inventory\Inventory>")
     */
    protected $values;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Inventory\Inventory[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Inventory\Inventory[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
