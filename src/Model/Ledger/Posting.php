<?php
namespace zaporylie\Tripletex\Model\Ledger;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class Posting implements ModelInterface
{

    use ModelTrait;

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Voucher
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\Voucher")
     */
    protected $voucher; // (Voucher, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $date; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Account
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\Account")
     */
    protected $account; // (Account, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Customer\Customer
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Customer\Customer")
     */
    protected $customer; // (Customer, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Supplier\Supplier
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Supplier\Supplier")
     */
    protected $supplier; // (Supplier, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Employee\Employee")
     */
    protected $employee; // (Employee, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Project\Project
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Project\Project")
     */
    protected $project; // (Project, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Product\Product
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Product\Product")
     */
    protected $product; // (Product, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Department\Department
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Department\Department")
     */
    protected $department; // (Department, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\VatType
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\VatType")
     */
    protected $vatType; // (VatType, optional),

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amount; // (number, optional),

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountCurrency; // (number, optional),

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountGross; // (number, optional),

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountGrossCurrency; // (number, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency; // (Currency, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\CloseGroup
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\CloseGroup")
     */
    protected $closeGroup; // (CloseGroup, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoiceNumber; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $termOfPayment; // (string, optional),

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $row; // (integer, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $systemGenerated; // (boolean, optional, read only)
}
