<?php

namespace zaporylie\Tripletex\Model\Token;

use zaporylie\Tripletex\Model\ExpirationDateTrait;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\Employee\Employee;

class EmployeeToken implements ModelInterface
{

    use ModelTrait;
    use ExpirationDateTrait;

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     */
    protected $employee;

    /**
     * @var \zaporylie\Tripletex\Model\Token\ApiConsumer
     */
    protected $apiConsumer;

    /**
     * @var string
     */
    protected $token;

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

    /**
     * Gets apiConsumer value.
     *
     * @return \zaporylie\Tripletex\Model\Token\ApiConsumer
     */
    public function getApiConsumer()
    {
        return $this->apiConsumer;
    }

    /**
     * Sets apiConsumer variable.
     *
     * @param \zaporylie\Tripletex\Model\Token\ApiConsumer $apiConsumer
     *
     * @return $this
     */
    public function setApiConsumer(ApiConsumer $apiConsumer)
    {
        $this->apiConsumer = $apiConsumer;
        return $this;
    }

    /**
     * Gets token value.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token variable.
     *
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
