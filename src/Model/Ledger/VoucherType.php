<?php
namespace zaporylie\Tripletex\Model\Ledger;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class VoucherType implements ModelInterface
{
    use ModelTrait;
    use NameTrait;
}
