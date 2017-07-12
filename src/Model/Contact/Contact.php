<?php

namespace zaporylie\Tripletex\Model\Contact;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class Contact implements ModelInterface
{
    use ModelTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $firstName; // (string),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $lastName; // (string),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $email; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Customer\Customer
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Customer\Customer")
     */
    protected $customer; // (Customer, optional)
}
