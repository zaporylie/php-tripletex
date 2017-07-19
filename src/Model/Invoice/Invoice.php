<?php

namespace zaporylie\Tripletex\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class Invoice implements ModelInterface
{
    use ModelTrait;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $invoiceNumber;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $invoiceDate;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $invoiceDueDate;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $kid;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $comment;

    /**
     * @var \zaporylie\Tripletex\Model\Order\Order[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Order\Order>")
     */
    protected $orders;

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Voucher
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\Voucher")
     */
    protected $voucher;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $deliveryDate;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amount;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountCurrency;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountExcludingVat;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountExcludingVatCurrency;

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isCreditNote;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $ehfSendStatus;

    /**
     * Gets kid value.
     *
     * @return string
     */
    public function getKid()
    {
        return $this->kid;
    }

    /**
     * Sets kid variable.
     *
     * @param string $kid
     *
     * @return $this
     */
    public function setKid($kid)
    {
        $this->kid = $kid;
        return $this;
    }

    /**
     * Gets amountExcludingVatCurrency value.
     *
     * @return float
     */
    public function getAmountExcludingVatCurrency()
    {
        return $this->amountExcludingVatCurrency;
    }

    /**
     * Gets currency value.
     *
     * @return \zaporylie\Tripletex\Model\Currency\Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Gets deliveryDate value.
     *
     * @return \DateTimeInterface
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Gets invoiceDate value.
     *
     * @return \DateTimeInterface
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Sets invoiceDate variable.
     *
     * @param \DateTimeInterface $invoiceDate
     *
     * @return $this
     */
    public function setInvoiceDate(\DateTimeInterface $invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Gets amount value.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }


    /**
     * Gets amountCurrency value.
     *
     * @return float
     */
    public function getAmountCurrency()
    {
        return $this->amountCurrency;
    }

    /**
     * Gets amountExcludingVat value.
     *
     * @return float
     */
    public function getAmountExcludingVat()
    {
        return $this->amountExcludingVat;
    }

    /**
     * Gets comment value.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets comment variable.
     *
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets ehfSendStatus value.
     *
     * @return string
     */
    public function getEhfSendStatus()
    {
        return $this->ehfSendStatus;
    }

    /**
     * Sets ehfSendStatus variable.
     *
     * @param string $ehfSendStatus
     *
     * @return $this
     */
    public function setEhfSendStatus($ehfSendStatus)
    {
        $this->ehfSendStatus = $ehfSendStatus;
        return $this;
    }

    /**
     * Gets invoiceDueDate value.
     *
     * @return \DateTimeInterface
     */
    public function getInvoiceDueDate()
    {
        return $this->invoiceDueDate;
    }

    /**
     * Sets invoiceDueDate variable.
     *
     * @param \DateTimeInterface $invoiceDueDate
     *
     * @return $this
     */
    public function setInvoiceDueDate(\DateTimeInterface $invoiceDueDate)
    {
        $this->invoiceDueDate = $invoiceDueDate;
        return $this;
    }

    /**
     * Gets invoiceNumber value.
     *
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Sets invoiceNumber variable.
     *
     * @param int $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * Gets orders value.
     *
     * @return \zaporylie\Tripletex\Model\Order\Order[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Sets orders variable.
     *
     * @param \zaporylie\Tripletex\Model\Order\Order[] $orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
        return $this;
    }

    /**
     * Gets voucher value.
     *
     * @return \zaporylie\Tripletex\Model\Ledger\Voucher
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Gets isCreditNote value.
     *
     * @return bool
     */
    public function getIsCreditNote()
    {
        return $this->isCreditNote;
    }
}
