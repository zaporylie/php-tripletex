<?php

namespace zaporylie\Tripletex\Resource\Session;

use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;
use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Token\RequestSessionCreate;

class SessionCreate extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::PUT;

    /**
     * @var string
     */
    protected $path = '/token/session/:create';

    /**
     * @param \zaporylie\Tripletex\Model\Token\RequestSessionCreate $sessionCreate
     *
     * @return \zaporylie\Tripletex\Model\Token\ResponseSessionTokenWrapper
     */
    public function call(RequestSessionCreate $sessionCreate)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
                'consumerToken' => $sessionCreate->getConsumerToken(),
                'employeeToken' => $sessionCreate->getEmployeeToken(),
                'expirationDate' => $sessionCreate->getExpirationDate()->format('c'),
            ]),
            // Authorization token is not available when we create new session.
            ['Authorization' => null]
        );
        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Token\ResponseSessionTokenWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Token\ResponseSessionTokenWrapper',
            'json'
        );

        // Save token in client.
        $this->app->getClient()->getSessionToken()->set($responseObject->getValue());

        return $responseObject;
    }
}
