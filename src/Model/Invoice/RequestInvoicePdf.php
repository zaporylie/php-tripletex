<?php

namespace zaporylie\Tripletex\Model\Invoice;

use zaporylie\Tripletex\Model\ModelInterface;

class RequestInvoicePdf implements ModelInterface
{

    /**
     * @var int
     */
    protected $invoiceId;

    /**
     * Gets invoiceId value.
     *
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Sets invoiceId variable.
     *
     * @param int $invoiceId
     *
     * @return $this
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }
}
