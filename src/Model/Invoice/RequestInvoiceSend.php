<?php

namespace zaporylie\Tripletex\Model\Invoice;

use zaporylie\Tripletex\Model\ModelInterface;

class RequestInvoiceSend implements ModelInterface
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $sendType;

    /**
     * @var string
     */
    protected $overrideEmailAddress;

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

    /**
     * Gets sendType value.
     *
     * @return string
     */
    public function getSendType()
    {
        return $this->sendType;
    }

    /**
     * Sets sendType variable.
     *
     * @param string $sendType
     *
     * @return $this
     */
    public function setSendType($sendType)
    {
        $this->sendType = $sendType;
        return $this;
    }

    /**
     * Gets overrideEmailAddress value.
     *
     * @return string
     */
    public function getOverrideEmailAddress()
    {
        return $this->overrideEmailAddress;
    }

    /**
     * Sets overrideEmailAddress variable.
     *
     * @param string $overrideEmailAddress
     *
     * @return $this
     */
    public function setOverrideEmailAddress($overrideEmailAddress)
    {
        $this->overrideEmailAddress = $overrideEmailAddress;
        return $this;
    }
}
