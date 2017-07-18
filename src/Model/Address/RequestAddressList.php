<?php

namespace zaporylie\Tripletex\Model\Address;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\IdTrait;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\RequestListBase;

class RequestAddressList extends RequestListBase implements ModelInterface
{

    use IdTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $addressLine1;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $addressLine2;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $postalCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $city;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * Gets addressLine1 value.
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Sets addressLine1 variable.
     *
     * @param string $addressLine1
     *
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * Gets addressLine2 value.
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Sets addressLine2 variable.
     *
     * @param string $addressLine2
     *
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * Gets postalCode value.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets postalCode variable.
     *
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets city value.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets city variable.
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets name value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name variable.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
