<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\Address\Address;
use zaporylie\Tripletex\Model\Contact\Contact;
use zaporylie\Tripletex\Model\Customer\Customer;
use zaporylie\Tripletex\Model\Department\Department;
use zaporylie\Tripletex\Model\Employee\Employee;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\Project\Project;

class Order implements ModelInterface
{

    use ModelTrait;

    /**
     * @var \zaporylie\Tripletex\Model\Customer\Customer
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Customer\Customer")
     */
    protected $customer;

    /**
     * @var \zaporylie\Tripletex\Model\Contact\Contact
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Contact\Contact")
     */
    protected $contact;

    /**
     * @var \zaporylie\Tripletex\Model\Contact\Contact
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Contact\Contact")
     */
    protected $attn;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $receiverEmail;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $overdueNoticeEmail;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $number;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $reference;

    /**
     * @var \zaporylie\Tripletex\Model\Contact\Contact
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Contact\Contact")
     */
    protected $ourContact;

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Employee\Employee")
     */
    protected $ourContactEmployee;

    /**
     * @var \zaporylie\Tripletex\Model\Department\Department
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Department\Department")
     */
    protected $department;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $orderDate;

    /**
     * @var \zaporylie\Tripletex\Model\Project\Project
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Project\Project")
     */
    protected $project;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoiceComment;

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $invoicesDueIn;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoicesDueInType;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isShowOpenPostsOnInvoices;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isClosed;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $deliveryDate;

    /**
     * @var \zaporylie\Tripletex\Model\Address\Address
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Address\Address")
     */
    protected $deliveryAddress;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $deliveryComment;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isPrioritizeAmountsIncludingVat;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $orderLineSorting;

    /**
     * @var \zaporylie\Tripletex\Model\Order\OrderLine[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Order\OrderLine>")
     */
    protected $orderLines;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    protected $isSubscription;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $subscriptionDuration;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionDurationType;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $subscriptionPeriodsOnInvoice;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionPeriodsOnInvoiceType;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionInvoicingTimeInAdvanceOrArrears;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $subscriptionInvoicingTime;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionInvoicingTimeType;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isSubscriptionAutoInvoicing;

    /**
     * Gets customer value.
     *
     * @return \zaporylie\Tripletex\Model\Customer\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets customer variable.
     *
     * @param \zaporylie\Tripletex\Model\Customer\Customer $customer
     *
     * @return $this
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Gets contact value.
     *
     * @return \zaporylie\Tripletex\Model\Contact\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets contact variable.
     *
     * @param \zaporylie\Tripletex\Model\Contact\Contact $contact
     *
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets number value.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets number variable.
     *
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets attn value.
     *
     * @return \zaporylie\Tripletex\Model\Contact\Contact
     */
    public function getAttn()
    {
        return $this->attn;
    }

    /**
     * Sets attn variable.
     *
     * @param \zaporylie\Tripletex\Model\Contact\Contact $attn
     *
     * @return $this
     */
    public function setAttn(Contact $attn)
    {
        $this->attn = $attn;
        return $this;
    }

    /**
     * Gets currency value.
     *
     * @return \zaporylie\Tripletex\Model\Currency\Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets currency variable.
     *
     * @param \zaporylie\Tripletex\Model\Currency\Currency $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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
    public function setDeliveryAddress(Address $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets deliveryComment value.
     *
     * @return string
     */
    public function getDeliveryComment()
    {
        return $this->deliveryComment;
    }

    /**
     * Sets deliveryComment variable.
     *
     * @param string $deliveryComment
     *
     * @return $this
     */
    public function setDeliveryComment($deliveryComment)
    {
        $this->deliveryComment = $deliveryComment;
        return $this;
    }

    /**
     * Gets deliveryDate value.
     *
     * @return \DateTimeInterface
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Sets deliveryDate variable.
     *
     * @param \DateTimeInterface $deliveryDate
     *
     * @return $this
     */
    public function setDeliveryDate(\DateTimeInterface $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * Gets department value.
     *
     * @return \zaporylie\Tripletex\Model\Department\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets department variable.
     *
     * @param \zaporylie\Tripletex\Model\Department\Department $department
     *
     * @return $this
     */
    public function setDepartment(Department $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Gets invoiceComment value.
     *
     * @return string
     */
    public function getInvoiceComment()
    {
        return $this->invoiceComment;
    }

    /**
     * Sets invoiceComment variable.
     *
     * @param string $invoiceComment
     *
     * @return $this
     */
    public function setInvoiceComment($invoiceComment)
    {
        $this->invoiceComment = $invoiceComment;
        return $this;
    }

    /**
     * Gets invoicesDueIn value.
     *
     * @return int
     */
    public function getInvoicesDueIn()
    {
        return $this->invoicesDueIn;
    }

    /**
     * Sets invoicesDueIn variable.
     *
     * @param int $invoicesDueIn
     *
     * @return $this
     */
    public function setInvoicesDueIn($invoicesDueIn)
    {
        $this->invoicesDueIn = $invoicesDueIn;
        return $this;
    }

    /**
     * Gets invoicesDueInType value.
     *
     * @return string
     */
    public function getInvoicesDueInType()
    {
        return $this->invoicesDueInType;
    }

    /**
     * Sets invoicesDueInType variable.
     *
     * @param string $invoicesDueInType
     *
     * @return $this
     */
    public function setInvoicesDueInType($invoicesDueInType)
    {
        $this->invoicesDueInType = $invoicesDueInType;
        return $this;
    }

    /**
     * Gets orderDate value.
     *
     * @return \DateTimeInterface
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Sets orderDate variable.
     *
     * @param \DateTimeInterface $orderDate
     *
     * @return $this
     */
    public function setOrderDate(\DateTimeInterface $orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * Gets orderLines value.
     *
     * @return \zaporylie\Tripletex\Model\Order\OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * Sets orderLines variable.
     *
     * @param \zaporylie\Tripletex\Model\Order\OrderLine[] $orderLines
     *
     * @return $this
     */
    public function setOrderLines(array $orderLines)
    {
        $this->orderLines = $orderLines;
        return $this;
    }

    /**
     * Gets orderLineSorting value.
     *
     * @return string
     */
    public function getOrderLineSorting()
    {
        return $this->orderLineSorting;
    }

    /**
     * Sets orderLineSorting variable.
     *
     * @param string $orderLineSorting
     *
     * @return $this
     */
    public function setOrderLineSorting($orderLineSorting)
    {
        $this->orderLineSorting = $orderLineSorting;
        return $this;
    }

    /**
     * Gets ourContact value.
     *
     * @return \zaporylie\Tripletex\Model\Contact\Contact
     */
    public function getOurContact()
    {
        return $this->ourContact;
    }

    /**
     * Sets ourContact variable.
     *
     * @param \zaporylie\Tripletex\Model\Contact\Contact $ourContact
     *
     * @return $this
     */
    public function setOurContact(Contact $ourContact)
    {
        $this->ourContact = $ourContact;
        return $this;
    }

    /**
     * Gets ourContactEmployee value.
     *
     * @return \zaporylie\Tripletex\Model\Employee\Employee
     */
    public function getOurContactEmployee()
    {
        return $this->ourContactEmployee;
    }

    /**
     * Sets ourContactEmployee variable.
     *
     * @param \zaporylie\Tripletex\Model\Employee\Employee $ourContactEmployee
     *
     * @return $this
     */
    public function setOurContactEmployee(Employee $ourContactEmployee)
    {
        $this->ourContactEmployee = $ourContactEmployee;
        return $this;
    }

    /**
     * Gets overdueNoticeEmail value.
     *
     * @return string
     */
    public function getOverdueNoticeEmail()
    {
        return $this->overdueNoticeEmail;
    }

    /**
     * Sets overdueNoticeEmail variable.
     *
     * @param string $overdueNoticeEmail
     *
     * @return $this
     */
    public function setOverdueNoticeEmail($overdueNoticeEmail)
    {
        $this->overdueNoticeEmail = $overdueNoticeEmail;
        return $this;
    }

    /**
     * Gets project value.
     *
     * @return \zaporylie\Tripletex\Model\Project\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Sets project variable.
     *
     * @param \zaporylie\Tripletex\Model\Project\Project $project
     *
     * @return $this
     */
    public function setProject(Project $project)
    {
        $this->project = $project;
        return $this;
    }

    /**
     * Gets receiverEmail value.
     *
     * @return string
     */
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    /**
     * Sets receiverEmail variable.
     *
     * @param string $receiverEmail
     *
     * @return $this
     */
    public function setReceiverEmail($receiverEmail)
    {
        $this->receiverEmail = $receiverEmail;
        return $this;
    }

    /**
     * Gets reference value.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets reference variable.
     *
     * @param string $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets subscriptionDuration value.
     *
     * @return int
     */
    public function getSubscriptionDuration()
    {
        return $this->subscriptionDuration;
    }

    /**
     * Sets subscriptionDuration variable.
     *
     * @param int $subscriptionDuration
     *
     * @return $this
     */
    public function setSubscriptionDuration($subscriptionDuration)
    {
        $this->subscriptionDuration = $subscriptionDuration;
        return $this;
    }

    /**
     * Gets subscriptionDurationType value.
     *
     * @return string
     */
    public function getSubscriptionDurationType()
    {
        return $this->subscriptionDurationType;
    }

    /**
     * Sets subscriptionDurationType variable.
     *
     * @param string $subscriptionDurationType
     *
     * @return $this
     */
    public function setSubscriptionDurationType($subscriptionDurationType)
    {
        $this->subscriptionDurationType = $subscriptionDurationType;
        return $this;
    }

    /**
     * Gets subscriptionInvoicingTime value.
     *
     * @return int
     */
    public function getSubscriptionInvoicingTime()
    {
        return $this->subscriptionInvoicingTime;
    }

    /**
     * Sets subscriptionInvoicingTime variable.
     *
     * @param int $subscriptionInvoicingTime
     *
     * @return $this
     */
    public function setSubscriptionInvoicingTime($subscriptionInvoicingTime)
    {
        $this->subscriptionInvoicingTime = $subscriptionInvoicingTime;
        return $this;
    }

    /**
     * Gets subscriptionInvoicingTimeInAdvanceOrArrears value.
     *
     * @return string
     */
    public function getSubscriptionInvoicingTimeInAdvanceOrArrears()
    {
        return $this->subscriptionInvoicingTimeInAdvanceOrArrears;
    }

    /**
     * Sets subscriptionInvoicingTimeInAdvanceOrArrears variable.
     *
     * @param string $subscriptionInvoicingTimeInAdvanceOrArrears
     *
     * @return $this
     */
    public function setSubscriptionInvoicingTimeInAdvanceOrArrears(
        $subscriptionInvoicingTimeInAdvanceOrArrears
    ) {
        $this->subscriptionInvoicingTimeInAdvanceOrArrears = $subscriptionInvoicingTimeInAdvanceOrArrears;
        return $this;
    }

    /**
     * Gets subscriptionInvoicingTimeType value.
     *
     * @return string
     */
    public function getSubscriptionInvoicingTimeType()
    {
        return $this->subscriptionInvoicingTimeType;
    }

    /**
     * Sets subscriptionInvoicingTimeType variable.
     *
     * @param string $subscriptionInvoicingTimeType
     *
     * @return $this
     */
    public function setSubscriptionInvoicingTimeType(
        $subscriptionInvoicingTimeType
    ) {
        $this->subscriptionInvoicingTimeType = $subscriptionInvoicingTimeType;
        return $this;
    }

    /**
     * Gets subscriptionPeriodsOnInvoice value.
     *
     * @return int
     */
    public function getSubscriptionPeriodsOnInvoice()
    {
        return $this->subscriptionPeriodsOnInvoice;
    }

    /**
     * Sets subscriptionPeriodsOnInvoice variable.
     *
     * @param int $subscriptionPeriodsOnInvoice
     *
     * @return $this
     */
    public function setSubscriptionPeriodsOnInvoice(
        $subscriptionPeriodsOnInvoice
    ) {
        $this->subscriptionPeriodsOnInvoice = $subscriptionPeriodsOnInvoice;
        return $this;
    }

    /**
     * Gets subscriptionPeriodsOnInvoiceType value.
     *
     * @return string
     */
    public function getSubscriptionPeriodsOnInvoiceType()
    {
        return $this->subscriptionPeriodsOnInvoiceType;
    }

    /**
     * Sets subscriptionPeriodsOnInvoiceType variable.
     *
     * @param string $subscriptionPeriodsOnInvoiceType
     *
     * @return $this
     */
    public function setSubscriptionPeriodsOnInvoiceType(
        $subscriptionPeriodsOnInvoiceType
    ) {
        $this->subscriptionPeriodsOnInvoiceType = $subscriptionPeriodsOnInvoiceType;
        return $this;
    }

    /**
     * Gets isClosed value.
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Sets isClosed variable.
     *
     * @param bool $isClosed
     *
     * @return $this
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * Gets isPrioritizeAmountsIncludingVat value.
     *
     * @return bool
     */
    public function getIsPrioritizeAmountsIncludingVat()
    {
        return $this->isPrioritizeAmountsIncludingVat;
    }

    /**
     * Sets isPrioritizeAmountsIncludingVat variable.
     *
     * @param bool $isPrioritizeAmountsIncludingVat
     *
     * @return $this
     */
    public function setIsPrioritizeAmountsIncludingVat(
        $isPrioritizeAmountsIncludingVat
    ) {
        $this->isPrioritizeAmountsIncludingVat = $isPrioritizeAmountsIncludingVat;
        return $this;
    }

    /**
     * Gets isShowOpenPostsOnInvoices value.
     *
     * @return bool
     */
    public function getIsShowOpenPostsOnInvoices()
    {
        return $this->isShowOpenPostsOnInvoices;
    }

    /**
     * Sets isShowOpenPostsOnInvoices variable.
     *
     * @param bool $isShowOpenPostsOnInvoices
     *
     * @return $this
     */
    public function setIsShowOpenPostsOnInvoices($isShowOpenPostsOnInvoices)
    {
        $this->isShowOpenPostsOnInvoices = $isShowOpenPostsOnInvoices;
        return $this;
    }

    /**
     * Gets isSubscription value.
     *
     * @return bool
     */
    public function getIsSubscription()
    {
        return $this->isSubscription;
    }

    /**
     * Sets isSubscription variable.
     *
     * @param bool $isSubscription
     *
     * @return $this
     */
    public function setIsSubscription($isSubscription)
    {
        $this->isSubscription = $isSubscription;
        return $this;
    }

    /**
     * Gets isSubscriptionAutoInvoicing value.
     *
     * @return bool
     */
    public function getIsSubscriptionAutoInvoicing()
    {
        return $this->isSubscriptionAutoInvoicing;
    }

    /**
     * Sets isSubscriptionAutoInvoicing variable.
     *
     * @param bool $isSubscriptionAutoInvoicing
     *
     * @return $this
     */
    public function setIsSubscriptionAutoInvoicing($isSubscriptionAutoInvoicing)
    {
        $this->isSubscriptionAutoInvoicing = $isSubscriptionAutoInvoicing;
        return $this;
    }
}
