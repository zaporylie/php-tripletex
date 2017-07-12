<?php

namespace zaporylie\Tripletex\Model\Currency;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class Currency implements ModelInterface
{
    use ModelTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $code; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string, optional)
}
