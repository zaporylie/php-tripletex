<?php

namespace zaporylie\Tripletex\Model\Country;

use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

use JMS\Serializer\Annotation as Serializer;

class Country implements ModelInterface
{
    use ModelTrait;
    use NameTrait;
}
