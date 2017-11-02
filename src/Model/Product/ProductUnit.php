<?php

namespace zaporylie\Tripletex\Model\Product;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class ProductUnit implements ModelInterface
{
    use ModelTrait;
    use NameTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $nameShort;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $commonCode;

    /**
     * @return string
     */
    public function getNameShort()
    {
        return $this->nameShort;
    }

    /**
     * @return string
     */
    public function getCommonCode()
    {
        return $this->commonCode;
    }
}
