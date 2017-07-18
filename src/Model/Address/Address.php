<?php

namespace zaporylie\Tripletex\Model\Address;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class Address implements ModelInterface
{

    use ModelTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $addressLine1; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $addressLine2; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $postalCode; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $city; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Country\Country
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Country\Country")
     */
    protected $country; // (Country, optional)

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
     * Gets country value.
     *
     * @return \zaporylie\Tripletex\Model\Country\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets country variable.
     *
     * @param \zaporylie\Tripletex\Model\Country\Country $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

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
}
