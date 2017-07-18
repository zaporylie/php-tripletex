<?php

namespace zaporylie\Tripletex\Resource\Invoice;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Address\Address;
use zaporylie\Tripletex\Resource\ResourceBase;

class AddressUpdate extends ResourceBase
{
    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::PUT;

    /**
     * @var string
     */
    protected $path = '/address/{id}';

    /**
     * @param \zaporylie\Tripletex\Model\Address\RequestAddressDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Address\ResponseAddressWrapper
     */
    public function call(Address $requestObject)
    {
        $address = $this->app->getSerializer()->serialize($requestObject, 'json');

        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath($requestObject->getId()),
            [],
            $address
        );

        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Address\ResponseAddressWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Address\ResponseAddressWrapper',
            'json'
        );

        return $responseObject;
    }
}
