<?php

namespace zaporylie\Tripletes\Model\Token;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\Token\LoggedInUser;

class ResponseLoggedInUserWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Token\LoggedInUser
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Token\LoggedInUser")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Token\LoggedInUser
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Token\LoggedInUser $value
     *
     * @return $this
     */
    public function setValue(LoggedInUser $value)
    {
        $this->value = $value;
        return $this;
    }
}
