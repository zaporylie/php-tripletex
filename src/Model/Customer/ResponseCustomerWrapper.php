<?php

namespace zaporylie\Tripletex\Model\Customer;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseCustomerWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Customer\Customer
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Customer\Customer")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Customer\Customer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Customer\Customer $value
     *
     * @return $this
     */
    public function setValue(Customer $value)
    {
        $this->value = $value;
        return $this;
    }
}
