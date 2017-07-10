<?php

namespace zaporylie\Tripletex\Model\Product;

use zaporylie\Tripletex\Model\Product;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseProductWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Product
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Product
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Product $value
     *
     * @return $this
     */
    public function setValue(Product $value)
    {
        $this->value = $value;
        return $this;
    }
}
