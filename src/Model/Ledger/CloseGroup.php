<?php
namespace zaporylie\Tripletex\Model\Ledger;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class CloseGroup implements ModelInterface
{
    use ModelTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $date; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Posting[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Ledger\Posting>")
     */
    protected $postings; // (Array[Posting], optional)
}
