<?php

namespace zaporylie\Tripletex\Model\Token;

use zaporylie\Tripletex\Model\ModelInterface;

class LoggedInUser implements ModelInterface
{
    /**
     * @var int
     */
    protected $employeeId;

    /**
     * @var int
     */
    protected $companyId;
}
