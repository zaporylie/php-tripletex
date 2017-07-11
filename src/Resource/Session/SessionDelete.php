<?php

namespace zaporylie\Tripletex\Resource\Session;

use zaporylie\Tripletex\Model\Token\RequestSessionDelete;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;
use zaporylie\Tripletex\Client\RequestMethod;

class SessionDelete extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::DELETE;

    /**
     * @var string
     */
    protected $path = '/token/session';

    /**
     * @param \zaporylie\Tripletex\Model\Token\RequestSessionDelete $session
     *
     * @return bool
     */
    public function call(RequestSessionDelete $session)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'/'.$session->getToken()
        );
        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        // Save token in client.
        $this->app->getClient()->setSessionToken(null);

        return true;
    }
}
