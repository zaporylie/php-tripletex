<?php
namespace zaporylie\Tripletex\Model\Ledger;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class Account implements ModelInterface
{
    use ModelTrait;
    use NameTrait;
    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $number; // (integer, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\VatType
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\VatType")
     */
    protected $vatType; // (VatType, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $vatLocked; // (boolean, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency; // (Currency, optional)
}
