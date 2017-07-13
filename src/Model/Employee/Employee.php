<?php

namespace zaporylie\Tripletex\Model\Employee;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class Employee implements ModelInterface
{
    use ModelTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $firstName;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $lastName;

    /**
     * Gets firstName value.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets firstName variable.
     *
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets lastName value.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets lastName variable.
     *
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
}
