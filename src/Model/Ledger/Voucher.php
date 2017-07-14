<?php
namespace zaporylie\Tripletex\Model\Ledger;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class Voucher implements ModelInterface
{
    use ModelTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $date; // (string),

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $number; // (integer, optional, read only): System generated number that cannot be changed. ,

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $year; // (integer, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\VoucherType
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\VoucherType")
     */
    protected $voucherType; // (VoucherType, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Posting[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Ledger\Posting>")
     */
    protected $postings; // (Array[Posting])
}
