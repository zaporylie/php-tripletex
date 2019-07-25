<?php

namespace zaporylie\Tripletex\Model\Customer;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\IdTrait;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\RequestListBase;

class RequestCustomerList extends RequestListBase implements ModelInterface
{
    use IdTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $customerAccountNumber;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isInactive;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $accountManagerId;

    /**
     * Gets customerAccountNumber value.
     *
     * @return string
     */
    public function getCustomerAccountNumber()
    {
        return $this->customerAccountNumber;
    }

    /**
     * Sets customerAccountNumber variable.
     *
     * @param string $customerAccountNumber
     *
     * @return $this
     */
    public function setCustomerAccountNumber($customerAccountNumber)
    {
        $this->customerAccountNumber = $customerAccountNumber;
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
     * Gets accountManagerId value.
     *
     * @return string
     */
    public function getAccountManagerId()
    {
        return $this->accountManagerId;
    }

    /**
     * Sets accountManagerId variable.
     *
     * @param string $accountManagerId
     *
     * @return $this
     */
    public function setAccountManagerId($accountManagerId)
    {
        $this->accountManagerId = $accountManagerId;
        return $this;
    }
}
