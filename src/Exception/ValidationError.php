<?php

namespace zaporylie\Tripletex\Exception;

use JMS\Serializer\Annotation as Serializer;

class ValidationError extends \InvalidArgumentException
{

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $message;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $field;
}
