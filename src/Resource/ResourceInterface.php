<?php

namespace zaporylie\Tripletex\Resource;

interface ResourceInterface
{
    /**
     * Returns HTTP request method.
     *
     * @return \zaporylie\Tripletex\Client\RequestMethod
     */
    public function getMethod();

    /**
     * Returns resource path.
     *
     * @return string
     */
    public function getPath();
}
