<?php

namespace zaporylie\Tripletex\Model\Project;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class Project implements ModelInterface
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
     * @var \zaporylie\Tripletex\Model\Employee\Employee
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Employee\Employee")
     */
    protected $projectManager; // (Employee, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $startDate; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Project\ProjectCategory
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Project\ProjectCategory")
     */
    protected $projectCategory; // (ProjectCategory, optional)

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isClosed;

    /**
     * @return ProjectCategory
     */
    public function getCategory()
    {
        return $this->projectCategory;
    }

    /**
     * Gets number value.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->isClosed;
    }
}
