<?php

namespace zaporylie\Tripletex\Model\Token;

use zaporylie\Tripletex\Model\ModelInterface;

class ResponseSessionTokenWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Token\SessionToken
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Token\SessionToken
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Token\SessionToken $value
     *
     * @return $this
     */
    public function setValue(SessionToken $value)
    {
        $this->value = $value;
        return $this;
    }
}
