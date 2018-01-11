<?php

namespace zaporylie\Tripletex\Model\Inventory;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class Inventory implements ModelInterface
{
    use ModelTrait;
    use NameTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $number; // (string, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isMainInventory; // (boolean, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isInactive; // (boolean, optional)
}
