<?php

namespace zaporylie\Tripletex\Model\Project;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseProjectList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Project\Project[]
     *
     * @\JMS\Serializer\Annotation\Type("array<zaporylie\Tripletex\Model\Project\Project>")
     */
    protected $values;

    /**
     * Gets values value.
     *
     * @return \zaporylie\Tripletex\Model\Project\Project[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets values variable.
     *
     * @param \zaporylie\Tripletex\Model\Project\Project[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
