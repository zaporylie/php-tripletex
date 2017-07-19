<?php

namespace zaporylie\Tripletex\Model\Order;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\Currency\Currency;
use zaporylie\Tripletex\Model\Ledger\VatType;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\Product\Product;

class OrderLine implements ModelInterface
{

    use ModelTrait;

    /**
     * @var \zaporylie\Tripletex\Model\Order\Order
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Order\Order")
     */
    protected $order;

    /**
     * @var \zaporylie\Tripletex\Model\Product\Product
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Product\Product")
     */
    protected $product;

    /**
     * @var \zaporylie\Tripletex\Model\Inventory\Inventory
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Inventory\Inventory")
     */
    protected $inventory;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $count;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $unitCostCurrency;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $unitPriceExcludingVatCurrency;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $unitPriceIncludingVatCurrency;

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $markup;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $discount;

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\VatType
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\VatType")
     */
    protected $vatType;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountExcludingVatCurrency;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    protected $amountIncludingVatCurrency;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    protected $isSubscription;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionPeriodStart;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $subscriptionPeriodEnd;

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
     * Gets count value.
     *
     * @return float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets count variable.
     *
     * @param float $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets product value.
     *
     * @return \zaporylie\Tripletex\Model\Product\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets product variable.
     *
     * @param \zaporylie\Tripletex\Model\Product\Product $product
     *
     * @return $this
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets description value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets description variable.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Gets amountIncludingVatCurrency value.
     *
     * @return float
     */
    public function getAmountIncludingVatCurrency()
    {
        return $this->amountIncludingVatCurrency;
    }

    /**
     * Gets discount value.
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets discount variable.
     *
     * @param float $discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets inventory value.
     *
     * @return \zaporylie\Tripletex\Model\Inventory\Inventory
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Sets inventory variable.
     *
     * @param \zaporylie\Tripletex\Model\Inventory\Inventory $inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * Gets markup value.
     *
     * @return float
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * Sets markup variable.
     *
     * @param float $markup
     *
     * @return $this
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;
        return $this;
    }

    /**
     * Gets order value.
     *
     * @return \zaporylie\Tripletex\Model\Order\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets order variable.
     *
     * @param \zaporylie\Tripletex\Model\Order\Order $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets unitPriceExcludingVatCurrency value.
     *
     * @return float
     */
    public function getUnitPriceExcludingVatCurrency()
    {
        return $this->unitPriceExcludingVatCurrency;
    }

    /**
     * Sets unitPriceExcludingVatCurrency variable.
     *
     * @param float $unitPriceExcludingVatCurrency
     *
     * @return $this
     */
    public function setUnitPriceExcludingVatCurrency(
        $unitPriceExcludingVatCurrency
    ) {
        $this->unitPriceExcludingVatCurrency = $unitPriceExcludingVatCurrency;
        return $this;
    }

    /**
     * Gets unitPriceIncludingVatCurrency value.
     *
     * @return float
     */
    public function getUnitPriceIncludingVatCurrency()
    {
        return $this->unitPriceIncludingVatCurrency;
    }

    /**
     * Sets unitPriceIncludingVatCurrency variable.
     *
     * @param float $unitPriceIncludingVatCurrency
     *
     * @return $this
     */
    public function setUnitPriceIncludingVatCurrency(
        $unitPriceIncludingVatCurrency
    ) {
        $this->unitPriceIncludingVatCurrency = $unitPriceIncludingVatCurrency;
        return $this;
    }

    /**
     * Gets unitCostCurrency value.
     *
     * @return float
     */
    public function getUnitCostCurrency()
    {
        return $this->unitCostCurrency;
    }

    /**
     * Sets unitCostCurrency variable.
     *
     * @param float $unitCostCurrency
     *
     * @return $this
     */
    public function setUnitCostCurrency($unitCostCurrency)
    {
        $this->unitCostCurrency = $unitCostCurrency;
        return $this;
    }

    /**
     * Gets vatType value.
     *
     * @return \zaporylie\Tripletex\Model\Ledger\VatType
     */
    public function getVatType()
    {
        return $this->vatType;
    }

    /**
     * Sets vatType variable.
     *
     * @param \zaporylie\Tripletex\Model\Ledger\VatType $vatType
     *
     * @return $this
     */
    public function setVatType(VatType $vatType)
    {
        $this->vatType = $vatType;
        return $this;
    }
}
