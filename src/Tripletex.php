<?php

namespace zaporylie\Tripletex;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use zaporylie\Tripletex\Api\Product;
use zaporylie\Tripletex\Api\Session;
use zaporylie\Tripletex\Client\TripletexClient;

class Tripletex {

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

    public function product()
    {
        return new Product($this);
    }
}
