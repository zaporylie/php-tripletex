<?php

namespace zaporylie\Tripletex\Model\Token;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class LoggedInUser implements ModelInterface
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $employeeId;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $companyId;
}
