<?php

namespace zaporylie\Tripletex\Model\Customer;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\Address\Address;
use zaporylie\Tripletex\Model\Employee\Employee;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class Customer implements ModelInterface
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
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $supplierNumber; // (integer, optional),

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $customerNumber; // (integer, optional),

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    protected $isSupplier; // (boolean, optional),

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    protected $isCustomer; // (boolean, optional),

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    protected $isInactive; // (boolean, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Employee\Employee")
     */
    protected $accountManager; // (Employee, optional),

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
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    protected $isPrivateIndividual; // (boolean, optional),

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

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoiceSendMethod; // (invoiceSendMethod, optional)

    /**
     * Setter for invoiceSendMethod.
     *
     * @param string $invoiceSendMethod
     *
     * @return $this
     */
    public function setInvoiceSendMethod($invoiceSendMethod)
    {
        $this->invoiceSendMethod = $invoiceSendMethod;
        return $this;
    }

    /**
     * Gets description value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets description variable.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets deliveryAddress value.
     *
     * @return \zaporylie\Tripletex\Model\Address\Address
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets deliveryAddress variable.
     *
     * @param \zaporylie\Tripletex\Model\Address\Address $deliveryAddress
     *
     * @return $this
     */
    public function setDeliveryAddress(Address $deliveryAddress = null)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets email value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email variable.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets customerNumber value.
     *
     * @return int
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Sets customerNumber variable.
     *
     * @param int $customerNumber
     *
     * @return $this
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    /**
     * Gets accountManager value.
     *
     * @return \zaporylie\Tripletex\Model\Employee\Employee
     */
    public function getAccountManager()
    {
        return $this->accountManager;
    }

    /**
     * Sets accountManager variable.
     *
     * @param \zaporylie\Tripletex\Model\Employee\Employee $accountManager
     *
     * @return $this
     */
    public function setAccountManager(Employee $accountManager)
    {
        $this->accountManager = $accountManager;
        return $this;
    }

    /**
     * Gets invoiceEmail value.
     *
     * @return string
     */
    public function getInvoiceEmail()
    {
        return $this->invoiceEmail;
    }

    /**
     * Sets invoiceEmail variable.
     *
     * @param string $invoiceEmail
     *
     * @return $this
     */
    public function setInvoiceEmail($invoiceEmail)
    {
        $this->invoiceEmail = $invoiceEmail;
        return $this;
    }

    /**
     * Gets organizationNumber value.
     *
     * @return string
     */
    public function getOrganizationNumber()
    {
        return $this->organizationNumber;
    }

    /**
     * Sets organizationNumber variable.
     *
     * @param string $organizationNumber
     *
     * @return $this
     */
    public function setOrganizationNumber($organizationNumber)
    {
        $this->organizationNumber = $organizationNumber;
        return $this;
    }

    /**
     * Gets phoneNumber value.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets phoneNumber variable.
     *
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Gets phoneNumberMobile value.
     *
     * @return string
     */
    public function getPhoneNumberMobile()
    {
        return $this->phoneNumberMobile;
    }

    /**
     * Sets phoneNumberMobile variable.
     *
     * @param string $phoneNumberMobile
     *
     * @return $this
     */
    public function setPhoneNumberMobile($phoneNumberMobile)
    {
        $this->phoneNumberMobile = $phoneNumberMobile;
        return $this;
    }

    /**
     * Gets physicalAddress value.
     *
     * @return \zaporylie\Tripletex\Model\Address\Address
     */
    public function getPhysicalAddress()
    {
        return $this->physicalAddress;
    }

    /**
     * Sets physicalAddress variable.
     *
     * @param \zaporylie\Tripletex\Model\Address\Address $physicalAddress
     *
     * @return $this
     */
    public function setPhysicalAddress(Address $physicalAddress = null)
    {
        $this->physicalAddress = $physicalAddress;
        return $this;
    }

    /**
     * Gets postalAddress value.
     *
     * @return \zaporylie\Tripletex\Model\Address\Address
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Sets postalAddress variable.
     *
     * @param \zaporylie\Tripletex\Model\Address\Address $postalAddress
     *
     * @return $this
     */
    public function setPostalAddress(Address $postalAddress = null)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * Gets supplierNumber value.
     *
     * @return int
     */
    public function getSupplierNumber()
    {
        return $this->supplierNumber;
    }

    /**
     * Sets supplierNumber variable.
     *
     * @param int $supplierNumber
     *
     * @return $this
     */
    public function setSupplierNumber($supplierNumber)
    {
        $this->supplierNumber = $supplierNumber;
        return $this;
    }

    /**
     * Gets isCustomer value.
     *
     * @return bool
     */
    public function getIsCustomer()
    {
        return $this->isCustomer;
    }

    /**
     * Sets isCustomer variable.
     *
     * @param bool $isCustomer
     *
     * @return $this
     */
    public function setIsCustomer($isCustomer)
    {
        $this->isCustomer = $isCustomer;
        return $this;
    }

    /**
     * Gets isInactive value.
     *
     * @return bool
     */
    public function getIsInactive()
    {
        return $this->isInactive;
    }

    /**
     * Sets isInactive variable.
     *
     * @param bool $isInactive
     *
     * @return $this
     */
    public function setIsInactive($isInactive)
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Gets isPrivateIndividual value.
     *
     * @return bool
     */
    public function getIsPrivateIndividual()
    {
        return $this->isPrivateIndividual;
    }

    /**
     * Sets isPrivateIndividual variable.
     *
     * @param bool $isPrivateIndividual
     *
     * @return $this
     */
    public function setIsPrivateIndividual($isPrivateIndividual)
    {
        $this->isPrivateIndividual = $isPrivateIndividual;
        return $this;
    }

    /**
     * Gets isSupplier value.
     *
     * @return bool
     */
    public function getIsSupplier()
    {
        return $this->isSupplier;
    }

    /**
     * Sets isSupplier variable.
     *
     * @param bool $isSupplier
     *
     * @return $this
     */
    public function setIsSupplier($isSupplier)
    {
        $this->isSupplier = $isSupplier;
        return $this;
    }
}
