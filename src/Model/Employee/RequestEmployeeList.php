<?php

namespace zaporylie\Tripletex\Model\Employee;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\IdTrait;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\RequestListBase;

class RequestEmployeeList extends RequestListBase implements ModelInterface
{
    use IdTrait;

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
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $employeeNumber;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $allowInformationRegistration;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $departmentId;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $onlyProjectManagers;

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
     * Gets lastName value.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Gets employeeNumber value.
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->employeeNumber;
    }

    /**
     * Sets employeeNumber variable.
     *
     * @param string $employeeNumber
     *
     * @return $this
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;
        return $this;
    }

    /**
     * Gets allowInformationRegistration value.
     *
     * @return bool
     */
    public function getAllowInformationRegistration()
    {
        return $this->allowInformationRegistration;
    }

    /**
     * Sets allowInformationRegistration variable.
     *
     * @param bool $allowInformationRegistration
     *
     * @return $this
     */
    public function setAllowInformationRegistration($allowInformationRegistration)
    {
        $this->allowInformationRegistration = $allowInformationRegistration;
        return $this;
    }

    /**
     * Gets departmentId value.
     *
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Sets departmentId variable.
     *
     * @param string $departmentId
     *
     * @return $this
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
        return $this;
    }

    /**
     * Gets onlyProjectManagers value.
     *
     * @return bool
     */
    public function getOnlyProjectManagers()
    {
        return $this->onlyProjectManagers;
    }

    /**
     * Sets onlyProjectManagers variable.
     *
     * @param bool $onlyProjectManagers
     *
     * @return $this
     */
    public function setOnlyProjectManagers($onlyProjectManagers)
    {
        $this->onlyProjectManagers = $onlyProjectManagers;
        return $this;
    }

}
?>
