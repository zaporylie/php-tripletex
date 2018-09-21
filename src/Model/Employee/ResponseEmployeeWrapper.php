<?php

namespace zaporylie\Tripletex\Model\Employee;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseEmployeeWrapper implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Employee\Employee")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Employee\Employee
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Employee\Employee $value
     *
     * @return $this
     */
    public function setValue(Employee $value)
    {
        $this->value = $value;
        return $this;
    }
}
?>
