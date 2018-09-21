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
    protected $projectCategory; // (ProjectCategory, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Customer\Customer
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Customer\Customer")
     */
    protected $customer; // (Customer, optional)

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isClosed; // (boolean, optional),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */

    protected $isInternal; // (boolean) Must be set to true. ,

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isOffer; // (boolean, optional, read only),


    /**
     * Gets projectManager value.
     *
     * @return \zaporylie\Tripletex\Model\Employee\Employee
     */
    public function getProjectManager()
    {
        return $this->projectManager;
    }

    /**
     * Gets description value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Gets customer value.
     *
     * @return \zaporylie\Tripletex\Model\Customer\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Gets isClosed value.
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Gets isInternal value.
     *
     * @return bool
     */
    public function getIsInternal()
    {
        return $this->isInternal;
    }

    /**
     * Gets isOffer value.
     *
     * @return bool
     */
    public function getIsOffer()
    {
        return $this->isOffer;
    }
}
?>
