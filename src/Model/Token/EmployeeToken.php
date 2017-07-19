<?php

namespace zaporylie\Tripletex\Model\Token;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\Employee\Employee;

class EmployeeToken extends TokenBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Employee\Employee")
     */
    protected $employee;

    /**
     * Gets employee value.
     *
     * @return \zaporylie\Tripletex\Model\Employee\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Sets employee variable.
     *
     * @param \zaporylie\Tripletex\Model\Employee\Employee $employee
     *
     * @return $this
     */
    public function setEmployee(Employee $employee)
    {
        $this->employee = $employee;
        return $this;
    }
}
