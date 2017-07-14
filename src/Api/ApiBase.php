<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Tripletex;

abstract class ApiBase
{
    /**
     * @var \zaporylie\Tripletex\Tripletex
     */
    protected $app;

    /**
     * Product constructor.
     *
     * @param \zaporylie\Tripletex\Tripletex $app
     */
    public function __construct(Tripletex $app)
    {
        $this->app = $app;
    }
}
