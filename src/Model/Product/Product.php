<?php

namespace zaporylie\Tripletex\Model\Product;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ModelInterface;
use zaporylie\Tripletex\Model\ModelTrait;
use zaporylie\Tripletex\Model\NameTrait;

class Product implements ModelInterface
{
    use ModelTrait;
    use NameTrait;

    /**
     * Product SKU.
     *
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $number;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $costExcludingVatCurrency;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $priceExcludingVatCurrency;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $priceIncludingVatCurrency;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    protected $isInactive;

    /**
     * @var \zaporylie\Tripletex\Model\Product\ProductUnit
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Product\ProductUnit")
     */
    protected $productUnit;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    protected $isStockItem;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $stockOfGoods;

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\VatType
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\VatType")
     */
    protected $vatType;

    /**
     * @var \zaporylie\Tripletex\Model\Currency\Currency
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Currency\Currency")
     */
    protected $currency;

    /**
     * @var \zaporylie\Tripletex\Model\Department\Department
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Department\Department")
     */
    protected $department;

    /**
     * @var \zaporylie\Tripletex\Model\Ledger\Account
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Ledger\Account")
     */
    protected $account;

    /**
     * Gets number value.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets number variable.
     *
     * @param string $number
     *
     * @return $this;
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getCostExcludingVatCurrency()
    {
        return $this->costExcludingVatCurrency;
    }

    /**
     * Gets priceExcludingVatCurrency value.
     *
     * @return int
     */
    public function getPriceExcludingVatCurrency()
    {
        return $this->priceExcludingVatCurrency;
    }

    /**
     * Gets priceIncludingVatCurrency value.
     *
     * @return int
     */
    public function getPriceIncludingVatCurrency()
    {
        return $this->priceIncludingVatCurrency;
    }

    /**
     * Gets isInactive value.
     *
     * @return bool
     */
    public function isInactive()
    {
        return $this->isInactive;
    }

    /**
     * Gets productUnit value.
     *
     * @return \zaporylie\Tripletex\Model\Product\ProductUnit
     */
    public function getProductUnit()
    {
        return $this->productUnit;
    }

    /**
     * Gets isStockItem value.
     *
     * @return bool
     */
    public function isStockItem()
    {
        return $this->isStockItem;
    }

    /**
     * Gets stockOfGoods value.
     *
     * @return int
     */
    public function getStockOfGoods()
    {
        return $this->stockOfGoods;
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
     * Gets currency value.
     *
     * @return \zaporylie\Tripletex\Model\Currency\Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Gets department value.
     *
     * @return \zaporylie\Tripletex\Model\Department\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Gets account value.
     *
     * @return \zaporylie\Tripletex\Model\Ledger\Account
     */
    public function getAccount()
    {
        return $this->account;
    }
}
