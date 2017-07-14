<?php

namespace zaporylie\Tripletex\Model\Department;

use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

use JMS\Serializer\Annotation as Serializer;

class Department implements ModelInterface
{
    use ModelTrait;
    use NameTrait;
}
