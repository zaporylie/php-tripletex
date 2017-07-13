<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class Order implements ModelInterface
{

    use ModelTrait;

    /**
     * @var \zaporylie\Tripletex\Model\Customer\Customer
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Customer\Customer")
     */
    protected $customer; // (Customer, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Contact\Contact
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Contact\Contact")
     */
    protected $contact; // (Contact, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Contact\Contact
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Contact\Contact")
     */
    protected $attn; // (Contact, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $receiverEmail; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $overdueNoticeEmail; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $number; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $reference; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Contact\Contact
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Contact\Contact")
     */
    protected $ourContact; // (Contact, optional): If the contact is not an employee ,

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Employee\Employee")
     */
    protected $ourContactEmployee; // (Employee, optional): If the contact is an employee ,

    /**
     * @var \zaporylie\Tripletex\Model\Department\Department
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Department\Department")
     */
    protected $department; // (Department, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $orderDate; // (string),

    /**
     * @var \zaporylie\Tripletex\Model\Project\Project
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Project\Project")
     */
    protected $project; // (Project, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoiceComment; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency; // (Currency, optional),

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $invoicesDueIn; // (integer, optional): Number of days/months in which invoices created from this order is due ,

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoicesDueInType; // (string, optional): Set the time unit of invoicesDueIn. The special case RECURRING_DAY_OF_MONTH enables the due date to be fixed to a specific day of the month, in this case the fixed due date will automatically be set as standard on all invoices created from this order. Note that when RECURRING_DAY_OF_MONTH is set, the due date will be set to the last day of month if "31" is set in invoicesDueIn. = ['DAYS', 'MONTHS', 'RECURRING_DAY_OF_MONTH'],

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isShowOpenPostsOnInvoices; // (boolean, optional): Show account statement - open posts on invoices created from this order ,

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isClosed; // (boolean, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $deliveryDate; // (string),

    /**
     * @var \zaporylie\Tripletex\Model\Address\Address
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Address\Address")
     */
    protected $deliveryAddress; // (Address, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $deliveryComment; // (string, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isPrioritizeAmountsIncludingVat; // (boolean, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $orderLineSorting; // (string, optional) = ['ID', 'PRODUCT', 'CUSTOM'],

    /**
     * @var \zaporylie\Tripletex\Model\Order\OrderLine[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Order\OrderLine>")
     */
    protected $orderLines; // (Array[OrderLine], optional, read only): Order lines tied to the order ,

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    protected $isSubscription; // (boolean, optional): If true, the order is a subscription, which enables periodical invoicing of order lines ,

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $subscriptionDuration; // (integer, optional): Number of months/years the subscription shall run ,

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionDurationType; // (string, optional): The time unit of subscriptionDuration = ['MONTHS', 'YEAR'],

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $subscriptionPeriodsOnInvoice; // (integer, optional): Number of periods on each invoice ,

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionPeriodsOnInvoiceType; // (string, optional, read only): The time unit of subscriptionPeriodsOnInvoice = ['MONTHS'],

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionInvoicingTimeInAdvanceOrArrears; // (string, optional): Invoicing in advance/in arrears = ['ADVANCE', 'ARREARS'],

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $subscriptionInvoicingTime; // (integer, optional): Number of days/months invoicing in advance/in arrears ,

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionInvoicingTimeType; // (string, optional): The time unit of subscriptionInvoicingTime = ['DAYS', 'MONTHS']

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isSubscriptionAutoInvoicing;
}
