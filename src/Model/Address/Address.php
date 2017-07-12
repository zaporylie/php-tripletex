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
}
