<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;

class OrderLine implements ModelInterface
{

    use ModelTrait;

    /**
     * @var \zaporylie\Tripletex\Model\Order\Order
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Order\Order")
     */
    protected $order; // (Order, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Product\Product
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Product\Product")
     */
    protected $product; // (Product, optional),

    /**
     * @var \zaporylie\Tripletex\Model\Inventory\Inventory
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Inventory\Inventory")
     */
    protected $inventory; // (Inventory, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description; // (string, optional),

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $count; // (number, optional),

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $unitCostCurrency; // (number, optional): Unit price purchase (cost) excluding VAT in the order's currency ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $unitPriceExcludingVatCurrency; // (number, optional): Unit price of purchase excluding VAT in the order's currency ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $unitPriceIncludingVatCurrency; // (number, optional): Unit price of purchase including VAT in the order's currency ,

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency; // (Currency, optional, read only): The order line's currency. Determined by the order's currency. ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $markup; // (number, optional): Markup given as a percentage (%) ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $discount; // (number, optional): Discount given as a percentage (%) ,

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\VatType
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\VatType")
     */
    protected $vatType; // (VatType, optional),

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountExcludingVatCurrency; // (number, optional, read only): Total amount on order line excluding VAT in the order's currency ,

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountIncludingVatCurrency; // (number, optional, read only): Total amount on order line including VAT in the order's currency ,

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isSubscription; // (boolean, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionPeriodStart; // (string, optional),

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionPeriodEnd; // (string, optional)
}
