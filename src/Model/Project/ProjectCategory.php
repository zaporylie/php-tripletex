<?php

namespace zaporylie\Tripletex\Model\Project;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class ProjectCategory implements ModelInterface
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
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string, optional)
}
