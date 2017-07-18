<?php

namespace zaporylie\Tripletex\Model\Address;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseAddressList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Address\Address[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Address\Address>")
     */
    protected $values;

    /**
     * Gets values value.
     *
     * @return \zaporylie\Tripletex\Model\Address\Address[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets values variable.
     *
     * @param \zaporylie\Tripletex\Model\Address\Address[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
