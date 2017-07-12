<?php

namespace zaporylie\Tripletex\Model\Invoice;

use zaporylie\Tripletex\Model\ModelInterface;

class ResponseInvoiceWrapper implements ModelInterface
{
    /**
     * @var \zaporylie\Tripletex\Model\Invoice\Invoice
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Invoice\Invoice")
     */
    protected $value;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Invoice\Invoice
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Invoice\Invoice $value
     *
     * @return $this
     */
    public function setValue(Invoice $value)
    {
        $this->value = $value;
        return $this;
    }
}
