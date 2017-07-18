<?php

namespace zaporylie\Tripletex\Resource\Address;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Address\RequestAddressDetails;
use zaporylie\Tripletex\Model\Address\ResponseAddressWrapper;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class AddressDetails extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/address/{id}';

    /**
     * @param \zaporylie\Tripletex\Model\Address\RequestAddressDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Address\ResponseAddressWrapper
     */
    public function call(RequestAddressDetails $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath($requestObject->getId()).'?'.http_build_query([
                'fields' => $requestObject->getFields(),
            ])
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
