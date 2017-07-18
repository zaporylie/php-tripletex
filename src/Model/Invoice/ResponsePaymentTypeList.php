<?php

namespace zaporylie\Tripletex\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponsePaymentTypeList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Invoice\PaymentType[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Invoice\PaymentType>")
     */
    protected $values;

    /**
     * Gets values value.
     *
     * @return \zaporylie\Tripletex\Model\Invoice\PaymentType[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets values variable.
     *
     * @param \zaporylie\Tripletex\Model\Invoice\PaymentType[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
