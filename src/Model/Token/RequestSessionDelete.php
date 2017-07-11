<?php

namespace zaporylie\Tripletex\Model\Token;

use zaporylie\Tripletex\Model\ModelInterface;

class RequestSessionDelete implements ModelInterface
{

    /**
     * @var string
     */
    protected $token;

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
