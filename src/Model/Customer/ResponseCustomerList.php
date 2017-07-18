<?php

namespace zaporylie\Tripletex\Model\Customer;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseCustomerList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Customer\Customer[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Customer\Customer>")
     */
    protected $values;

    /**
     * Gets values value.
     *
     * @return \zaporylie\Tripletex\Model\Customer\Customer[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets values variable.
     *
     * @param \zaporylie\Tripletex\Model\Customer\Customer[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
