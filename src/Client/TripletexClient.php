<?php

namespace zaporylie\Tripletex\Client;

use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use zaporylie\Tripletex\Client\Token\TokenStorage;
use zaporylie\Tripletex\Client\Token\TokenStorageInterface;
use zaporylie\Tripletex\Model\Token\SessionToken;

class TripletexClient
{

    /**
     * API's base URL.
     */

    /**
     * @var string
     */
    public static $BASE_URL = 'https://tripletex.no/v2';

    /**
     * @var \Http\Client\HttpClient|\Http\Client\HttpAsyncClient
     */
    protected $httpClient;

    /**
     * @var \Http\Message\MessageFactory
     */
    protected $messageFactory;

    /**
     * @var \zaporylie\Tripletex\Client\Token\TokenStorageInterface
     */
    protected $sessionToken;

    /**
     * @var int
     */
    protected $companyId;

    /**
     * TripletexClient constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->setBaseUrl($options['production'] ?? true);
        $this->setHttpClient(isset($options['http_client']) ? $options['http_client'] : null);
        $this->setSessionToken(isset($options['session_token']) ? $options['session_token'] : null);
        $this->setCompanyId(isset($options['company_id']) ? $options['company_id'] : 0);
    }

    /**
     * @return string
     */
    public static function getBaseUrl()
    {
        return self::$BASE_URL;
    }

    /**
     * @return string
     */
    private function setBaseUrl($production)
    {
        self::$BASE_URL = $production ? 'https://tripletex.no/v2' : 'https://api.tripletex.io/v2';
        return self;
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
     * @return \zaporylie\Tripletex\Client\Token\TokenStorageInterface
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * Sets sessionToken variable.
     *
     * @param string|\zaporylie\Tripletex\Client\Token\TokenStorageInterface|null $sessionToken
     *
     * @return $this
     */
    protected function setSessionToken($sessionToken)
    {
        if (isset($sessionToken) && $sessionToken instanceof TokenStorageInterface) {
            $this->sessionToken = $sessionToken;
        } elseif (isset($sessionToken) && is_scalar($sessionToken)) {
            $this->sessionToken = new TokenStorage();
            $this->sessionToken->set((new SessionToken())->setToken($sessionToken));
        } else {
            $this->sessionToken = new TokenStorage();
        }
        return $this;
    }

    /**
     * Gets companyId value.
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Sets companyId variable.
     *
     * @param int $companyId
     *
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
