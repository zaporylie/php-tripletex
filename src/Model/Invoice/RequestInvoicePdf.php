<?php

namespace zaporylie\Tripletex\Model\Invoice;

use zaporylie\Tripletex\Model\ModelInterface;

class RequestInvoicePdf implements ModelInterface
{

    /**
     * @var int
     */
    protected $id;

    /**
     * Gets invoiceId value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets invoiceId variable.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
