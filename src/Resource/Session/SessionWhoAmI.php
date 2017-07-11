<?php

namespace zaporylie\Tripletex\Resource\Session;

use zaporylie\Tripletex\Model\Token\RequestSessionWhoAmI;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;
use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Token\RequestSessionCreate;

class SessionWhoAmI extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/token/session/>whoAmI';

    /**
     * @param \zaporylie\Tripletex\Model\Token\RequestSessionWhoAmI $sessionWhoAmI
     *
     * @return \zaporylie\Tripletex\Model\Token\ResponseLoggedInUserWrapper
     */
    public function call(RequestSessionWhoAmI $sessionWhoAmI)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
          $this->getMethod(),
          // @todo: Add {fields}.
          $this->getPath().'?'.http_build_query([])
        );
        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Token\ResponseLoggedInUserWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
          $body,
          'zaporylie\Tripletex\Model\Token\ResponseLoggedInUserWrapper',
          'json'
        );

        return $responseObject;
    }
}
