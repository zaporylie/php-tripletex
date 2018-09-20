<?php

namespace zaporylie\Tripletex\Model\Employee;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseEmployeeList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Employee\Employee>")
     */
    protected $values;

    /**
     * Gets values value.
     *
     * @return \zaporylie\Tripletex\Model\Employee\Employee[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets values variable.
     *
     * @param \zaporylie\Tripletex\Model\Employee\Employee[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
?>
