<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Token\RequestSessionDelete;
use zaporylie\Tripletex\Model\Token\RequestSessionWhoAmI;
use zaporylie\Tripletex\Resource\Session\SessionCreate;
use zaporylie\Tripletex\Model\Token\RequestSessionCreate;
use zaporylie\Tripletex\Resource\Session\SessionDelete;
use zaporylie\Tripletex\Resource\Session\SessionWhoAmI;
use zaporylie\Tripletex\Tripletex;

class Session extends ApiBase
{

    /**
     * Authorize user and retrieve session token.
     *
     * @param string $customerToken
     * @param string $employeeToken
     * @param \DateTime|null $expirationDate
     *
     * @return \zaporylie\Tripletex\Model\Token\ResponseSessionTokenWrapper
     */
    public function create($customerToken, $employeeToken, \DateTime $expirationDate = null)
    {
        $requestSessionCreate = (new RequestSessionCreate())
          ->setConsumerToken($customerToken)
          ->setEmployeeToken($employeeToken)
          ->setExpirationDate($expirationDate);
        $session = new SessionCreate($this->app);
        return $session->call($requestSessionCreate);
    }

    /**
     * @param \zaporylie\Tripletex\Model\Token\RequestSessionWhoAmI|null $sessionWhoAmI
     *
     * @return \zaporylie\Tripletex\Model\Token\ResponseLoggedInUserWrapper
     */
    public function whoAmI(RequestSessionWhoAmI $sessionWhoAmI = null)
    {
        if (!isset($sessionWhoAmI)) {
            $sessionWhoAmI = new RequestSessionWhoAmI();
        }
        return (new SessionWhoAmI($this->app))->call($sessionWhoAmI);
    }

    /**
     * @param null $token
     *
     * @return bool
     */
    public function delete($token = null)
    {
        $sessionDelete = new RequestSessionDelete();
        if (!isset($token) && $this->app->getClient()->getSessionToken()->has()) {
            $token = $this->app->getClient()->getSessionToken()->get()->getToken();
            $default = true;
        }
        $sessionDelete->setToken($token);
        $response = (new SessionDelete($this->app))->call($sessionDelete);

        if ($response && !empty($default)) {
            // Reset token.
            $this->app->getClient()->getSessionToken()->clear();
        }

        return $response;
    }
}
