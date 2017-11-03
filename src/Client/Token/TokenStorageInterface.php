<?php

namespace zaporylie\Tripletex\Client\Token;

use zaporylie\Tripletex\Model\Token\SessionToken;

interface TokenStorageInterface
{
    /**
     * @return \zaporylie\Tripletex\Model\Token\SessionToken
     */
    public function getToken();

    /**
     * @param \zaporylie\Tripletex\Model\Token\SessionToken $token
     *
     * @return $this
     */
    public function setToken(SessionToken $token);
}
