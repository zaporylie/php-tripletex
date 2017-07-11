<?php

namespace zaporylie\Tripletex\Client;

use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;

class TripletexClient
{

    /**
     * API's base URL.
     */
    const BASE_URL = 'https://tripletex.no/v2';

    /**
     * @var \Http\Client\HttpClient|\Http\Client\HttpAsyncClient
     */
    protected $httpClient;

    /**
     * @var \Http\Message\MessageFactory
     */
    protected $messageFactory;

    /**
     * @var string
     */
    protected $sessionToken;

    /**
     * TripletexClient constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->setHttpClient(isset($options['http_client']) ? $options['http_client'] : null);
        $this->setSessionToken(isset($options['session_token']) ? $options['session_token'] : null);
    }

    /**
     * @return string
     */
    public static function getBaseUrl()
    {
        return self::BASE_URL;
    }

    /**
     * @return \Http\Client\HttpAsyncClient|\Http\Client\HttpClient
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * @param \Http\Client\HttpAsyncClient|\Http\Client\HttpClient|null $httpClient
     *
     * @return $this
     */
    public function setHttpClient($httpClient)
    {
        $this->httpClient = self::httpClientDiscovery($httpClient);
        unset($this->messageFactory);
        return $this;
    }

    /**
     * Gets sessionToken value.
     *
     * @return string
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * Sets sessionToken variable.
     *
     * @param string $sessionToken
     *
     * @return $this
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
        return $this;
    }

    /**
     * @return \Http\Message\MessageFactory
     */
    public function messageFactoryDiscovery()
    {
        if (!isset($this->messageFactory)) {
            $this->messageFactory = MessageFactoryDiscovery::find();
        }
        return $this->messageFactory;
    }

    /**
     * Use this static method to get default HTTP Client.
     *
     * @param null|\Http\Client\HttpClient|\Http\Client\HttpAsyncClient $client
     *
     * @return \Http\Client\HttpClient|\Http\Client\HttpAsyncClient
     */
    public static function httpClientDiscovery($client = null)
    {
        if (isset($client) && ($client instanceof HttpAsyncClient || $client instanceof HttpClient)) {
            return $client;
        } elseif (isset($client)) {
            throw new \LogicException(sprintf(
                'HttpClient must be instance of "%s" or "%s"',
                HttpClient::class,
                HttpAsyncClient::class
            ));
        }
        return HttpClientDiscovery::find();
    }

}
