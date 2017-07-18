<?php

namespace zaporylie\Tripletex\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponsePaymentTypeWrapper implements ModelInterface
{
    /**
     * @var \zaporylie\Tripletex\Model\Invoice\PaymentType
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Invoice\PaymentType")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Invoice\PaymentType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Invoice\PaymentType $value
     *
     * @return $this
     */
    public function setValue(PaymentType $value)
    {
        $this->value = $value;
        return $this;
    }
}
