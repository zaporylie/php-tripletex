<?php

namespace zaporylie\Tripletex\Model\Token;

use JMS\Serializer\Annotation as Serializer;
use zaporylie\Tripletex\Model\ExpirationDateTrait;
use zaporylie\Tripletex\Model\ModelTrait;

abstract class TokenBase
{
    use ModelTrait;
    use ExpirationDateTrait;

    /**
     * @var \zaporylie\Tripletex\Model\Token\ApiConsumer
     *
     * @Serializer\Type("zaporylie\Tripletex\Model\Token\ApiConsumer")
     */
    protected $apiConsumer;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $token;

    /**
     * Gets apiConsumer value.
     *
     * @return \zaporylie\Tripletex\Model\Token\ApiConsumer
     */
    public function getApiConsumer()
    {
        return $this->apiConsumer;
    }

    /**
     * Sets apiConsumer variable.
     *
     * @param \zaporylie\Tripletex\Model\Token\ApiConsumer $apiConsumer
     *
     * @return $this
     */
    public function setApiConsumer(ApiConsumer $apiConsumer)
    {
        $this->apiConsumer = $apiConsumer;
        return $this;
    }

    /**
     * Gets token value.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token variable.
     *
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
