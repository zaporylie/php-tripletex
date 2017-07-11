<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Resource\Session\SessionCreate;
use zaporylie\Tripletex\Model\Token\RequestSessionCreate;
use zaporylie\Tripletex\Tripletex;

class Session
{

    /**
     * @var \zaporylie\Tripletex\Tripletex
     */
    protected $app;

    /**
     * Session constructor.
     *
     * @param \zaporylie\Tripletex\Tripletex $app
     */
    public function __construct(Tripletex $app)
    {
        $this->app = $app;
    }

    public function create($customerToken, $employeeToken, \DateTime $expirationDate = null)
    {
        $requestSessionCreate = (new RequestSessionCreate())
          ->setConsumerToken($customerToken)
          ->setEmployeeToken($employeeToken)
          ->setExpirationDate($expirationDate);
        $session = new SessionCreate($this->app);
        return $session->createSession($requestSessionCreate);
    }

    public function whoAmI()
    {

    }

    public function delete()
    {

    }
}
