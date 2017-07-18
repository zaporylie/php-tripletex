<?php

namespace zaporylie\Tripletex\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class PaymentType implements ModelInterface
{

    use ModelTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Account
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\Account")
     */
    protected $debitAccount; // (Account, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Account
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\Account")
     */
    protected $creditAccount; // (Account, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\VatType
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\VatType")
     */
    protected $vatType; // (VatType, optional)
}
