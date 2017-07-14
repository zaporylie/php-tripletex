<?php
namespace zaporylie\Tripletex\Model\Supplier;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class Supplier implements ModelInterface
{
    use ModelTrait;
    use NameTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $organizationNumber; // (string, optional),

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $supplierNumber; // (integer, optional),

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $customerNumber; // (integer, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isSupplier; // (boolean, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isCustomer; // (boolean, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isInactive; // (boolean, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $email; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoiceEmail; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $phoneNumber; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $phoneNumberMobile; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isPrivateIndividual; // (boolean, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Employee\Employee")
     */
    protected $accountManager; // (Employee, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Address\Address
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Address\Address")
     */
    protected $postalAddress; // (Address, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Address\Address
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Address\Address")
     */
    protected $physicalAddress; // (Address, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Address\Address
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Address\Address")
     */
    protected $deliveryAddress; // (Address, optional)
}
