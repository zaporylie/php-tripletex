<?php

namespace zaporylie\Tripletex\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseInvoiceList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Invoice\Invoice[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Invoice\Invoice>")
     */
    protected $values;

    /**
     * Gets values value.
     *
     * @return \zaporylie\Tripletex\Model\Invoice\Invoice[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets values variable.
     *
     * @param \zaporylie\Tripletex\Model\Invoice\Invoice[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
