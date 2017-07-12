<?php

namespace zaporylie\Tripletex\Model\Product;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseProductWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Product\Product
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Product\Product")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Product\Product
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Product\Product $value
     *
     * @return $this
     */
    public function setValue(Product $value)
    {
        $this->value = $value;
        return $this;
    }
}
