<?php

namespace zaporylie\Tripletex\Model\Ledger;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ListBase;
use zaporylie\Tripletex\Model\ModelInterface;

class ResponseVatTypeList extends ListBase implements ModelInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\VatType[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Ledger\VatType>")
     */
    protected $values;

    /**
     * Gets value value.
     *
     * @return \zaporylie\Tripletex\Model\Ledger\VatType[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets value variable.
     *
     * @param \zaporylie\Tripletex\Model\Ledger\VatType[] $values
     *
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
