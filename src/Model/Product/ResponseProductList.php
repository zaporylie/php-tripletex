<?php

namespace zaporylie\Tripletex\Model\Product;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseProductList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Product\Product[]
     *
     * @\JMS\Serializer\Annotation\Type("array<zaporylie\Tripletex\Model\Product\Product>")
     */
    protected $values;

    /**
     * Gets values value.
     *
     * @return \zaporylie\Tripletex\Model\Product\Product[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets values variable.
     *
     * @param \zaporylie\Tripletex\Model\Product\Product[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
