<?php

namespace zaporylie\Tripletex\Client\Token;

use Blablacar\Redis\Client;
use zaporylie\Tripletex\Model\Token\SessionToken;

class RedisTokenStorage implements TokenStorageInterface
{

    /**
     * Default storage key.
     */
    const DEFAULT_KEY = 'tripletex_session_token';

    /**
     * @var \Blablacar\Redis\Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var \zaporylie\Tripletex\Model\Token\SessionToken
     */
    protected $token;

    /**
     * RedisTokenStorage constructor.
     *
     * @param \Blablacar\Redis\Client $client
     * @param string $key
     */
    public function __construct(Client $client, $key = self::DEFAULT_KEY)
    {
        $this->client = $client;
        $this->client->connect();
        $this->key = $key;
    }

    /**
     * Gets token value.
     *
     * @return \zaporylie\Tripletex\Model\Token\SessionToken
     */
    public function get()
    {
        $token = $this->client->getRedis()->get($this->key);
        if ($token === null) {
            throw new \LogicException('No token has been set');
        }
        return unserialize($token);
    }

    /**
     * Sets token variable.
     *
     * @param \zaporylie\Tripletex\Model\Token\SessionToken $token
     *
     * @return $this
     */
    public function set(SessionToken $token)
    {
        $this->token = $token;
        $this->client->getRedis()->set($this->key, serialize($token));
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function has()
    {
        return $this->client->getRedis()->exists($this->key);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->client->getRedis()->delete($this->key);
        return $this;
    }
}
