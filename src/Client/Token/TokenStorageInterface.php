<?php

namespace zaporylie\Tripletex\Client\Token;

use zaporylie\Tripletex\Model\Token\SessionToken;

interface TokenStorageInterface
{
    /**
     * @return \zaporylie\Tripletex\Model\Token\SessionToken
     */
    public function get();

    /**
     * @param \zaporylie\Tripletex\Model\Token\SessionToken $token
     *
     * @return $this
     */
    public function set(SessionToken $token);
}
