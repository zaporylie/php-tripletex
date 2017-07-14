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
    protected $invoiceNumber; // (integer, optional): If value is set to 0, the invoice number will be generated. ,

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoiceDate; // (string),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $invoiceDueDate; // (string),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $kid; // (string, optional): KID - Kundeidentifikasjonsnummer. ,

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $comment; // (string, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Order\Order[]
     *
     * @Serializer\Type("array<zaporylie\Tripletex\Model\Order\Order>")
     */
    protected $orders; // (Array[Order]): Related orders. Only one order per invoice is supported at the moment. ,

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Voucher
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\Voucher")
     */
    protected $voucher; // (Voucher, optional, read only): The invoice voucher. ,

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $deliveryDate; // (string, optional, read only): The delivery date. ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amount; // (number, optional, read only): In the company’s currency, typically NOK. ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountCurrency; // (number, optional, read only): In the specified currency. ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountExcludingVat; // (number, optional, read only): Amount excluding VAT (NOK). ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountExcludingVatCurrency; // (number, optional, read only): Amount excluding VAT in the specified currency. ,

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency; // (Currency, optional, read only),

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isCreditNote; // (boolean, optional, read only),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $ehfSendStatus; // (string, optional) = ['DO_NOT_SEND', 'SEND', 'SENT', 'SEND_FAILURE_RECIPIENT_NOT_FOUND']
}
