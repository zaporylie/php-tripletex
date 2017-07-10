<?php

namespace zaporylie\Tripletex\Model\Token;

use zaporylie\Tripletex\Model\ExpirationDateTrait;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\ModelInterface;

class SessionToken implements ModelInterface
{

    use ModelTrait;
    use ExpirationDateTrait;

    /**
     * @var \zaporylie\Tripletex\Model\Token\ConsumerToken
     */
    protected $consumerToken;

    /**
     * @var \zaporylie\Tripletex\Model\Token\Employee
     */
    protected $employeeToken;

    /**
     * @var string
     */
    protected $token;

    /**
     * Gets consumerToken value.
     *
     * @return \zaporylie\Tripletex\Model\Token\ConsumerToken
     */
    public function getConsumerToken()
    {
        return $this->consumerToken;
    }

    /**
     * Sets consumerToken variable.
     *
     * @param \zaporylie\Tripletex\Model\Token\ConsumerToken $consumerToken
     *
     * @return $this
     */
    public function setConsumerToken(ConsumerToken $consumerToken)
    {
        $this->consumerToken = $consumerToken;
        return $this;
    }

    /**
     * Gets employeeToken value.
     *
     * @return \zaporylie\Tripletex\Model\Token\Employee
     */
    public function getEmployeeToken()
    {
        return $this->employeeToken;
    }

    /**
     * Sets employeeToken variable.
     *
     * @param \zaporylie\Tripletex\Model\Token\Employee $employeeToken
     *
     * @return $this
     */
    public function setEmployeeToken(Employee $employeeToken)
    {
        $this->employeeToken = $employeeToken;
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
