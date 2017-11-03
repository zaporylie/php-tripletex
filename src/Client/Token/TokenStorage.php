<?php

namespace zaporylie\Tripletex\Client\Token;

use zaporylie\Tripletex\Model\Token\SessionToken;

class TokenStorage implements TokenStorageInterface
{

    /**
     * @var \zaporylie\Tripletex\Model\Token\SessionToken
     */
    protected $token;

    /**
     * Gets token value.
     *
     * @return \zaporylie\Tripletex\Model\Token\SessionToken
     */
    public function get()
    {
        return $this->token;
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
        return $this;
    }
}
