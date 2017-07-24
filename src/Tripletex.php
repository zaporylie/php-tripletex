<?php

namespace zaporylie\Tripletex;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use zaporylie\Tripletex\Api\Invoice;
use zaporylie\Tripletex\Api\Order;
use zaporylie\Tripletex\Api\OrderLine;
use zaporylie\Tripletex\Api\Product;
use zaporylie\Tripletex\Api\Session;
use zaporylie\Tripletex\Api\Address;
use zaporylie\Tripletex\Api\Customer;
use zaporylie\Tripletex\Api\Ledger;
use zaporylie\Tripletex\Client\TripletexClient;

class Tripletex
{

    /**
    * @var \zaporylie\Tripletex\Client\TripletexClient
    */
    protected $client;

    /**
     * @var \JMS\Serializer\Serializer
     */
    protected $serializer;

    /**
    * TripletexApp constructor.
    *
    * @param \zaporylie\Tripletex\Client\TripletexClient $client
    */
    public function __construct(TripletexClient $client)
    {
        $this->client = $client;
        AnnotationRegistry::registerLoader('class_exists');
        $this->serializer = SerializerBuilder::create()
          ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
          ->build();
    }

    /**
     * Gets serializer value.
     *
     * @return \JMS\Serializer\Serializer
     */
    public function getSerializer()
    {
        return $this->serializer;
    }

    /**
     * Gets client value.
     *
     * @return \zaporylie\Tripletex\Client\TripletexClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return \zaporylie\Tripletex\Api\Session
     */
    public function session()
    {
        return new Session($this);
    }

    /**
     * @return \zaporylie\Tripletex\Api\Product
     */
    public function product()
    {
        return new Product($this);
    }

    /**
     * @return \zaporylie\Tripletex\Api\Order
     */
    public function order()
    {
        return new Order($this);
    }

    /**
     * @return \zaporylie\Tripletex\Api\OrderLine
     */
    public function orderLine()
    {
        return new OrderLine($this);
    }

    /**
     * @return \zaporylie\Tripletex\Api\Invoice
     */
    public function invoice()
    {
        return new Invoice($this);
    }

    /**
     * @return \zaporylie\Tripletex\Api\Address
     */
    public function address()
    {
        return new Address($this);
    }

    /**
     * @return \zaporylie\Tripletex\Api\Customer
     */
    public function customer()
    {
        return new Customer($this);
    }

    /**
     * @return \zaporylie\Tripletex\Api\Ledger
     */
    public function ledger()
    {
        return new Ledger($this);
    }
}
