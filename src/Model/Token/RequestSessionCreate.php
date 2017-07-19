<?php

namespace zaporylie\Tripletex\Model\Token;

use zaporylie\Tripletex\Model\ExpirationDateTrait;
use zaporylie\Tripletex\Model\ModelInterface;

class RequestSessionCreate implements ModelInterface
{
    use ExpirationDateTrait {
        setExpirationDate as protected traitSetExpirationDate;
    }

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $consumerToken;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $employeeToken;

    /**
     * Gets consumerToken value.
     *
     * @return mixed
     */
    public function getConsumerToken()
    {
        return $this->consumerToken;
    }

    /**
     * Sets consumerToken variable.
     *
     * @param mixed $consumerToken
     *
     * @return $this
     */
    public function setConsumerToken($consumerToken)
    {
        $this->consumerToken = $consumerToken;
        return $this;
    }

    /**
     * Gets employeeToken value.
     *
     * @return string
     */
    public function getEmployeeToken()
    {
        return $this->employeeToken;
    }

    /**
     * Sets employeeToken variable.
     *
     * @param string $employeeToken
     *
     * @return $this
     */
    public function setEmployeeToken($employeeToken)
    {
        $this->employeeToken = $employeeToken;
        return $this;
    }

    /**
     * Sets expirationDate variable.
     *
     * @param \DateTimeInterface $expirationDate
     *
     * @return $this
     */
    public function setExpirationDate(\DateTimeInterface $expirationDate = null)
    {
        if (!isset($expirationDate)) {
            $expirationDate = new \DateTime('+1 week');
        }
        return $this->traitSetExpirationDate($expirationDate);
    }
}
