<?php

namespace zaporylie\Tripletex\Resource\Address;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Address\RequestAddressList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class AddressList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/address';

    /**
     * @param \zaporylie\Tripletex\Model\Address\RequestAddressList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Address\ResponseAddressList
     */
    public function call(RequestAddressList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
                'id' => $requestObject->getId(),
                'addressLine1' => $requestObject->getAddressLine1(),
                'addressLine2' => $requestObject->getAddressLine2(),
                'city' => $requestObject->getCity(),
                'postalCode' => $requestObject->getPostalCode(),
                'name' => $requestObject->getName(),
                'from' => $requestObject->getFrom(),
                'count' => $requestObject->getCount(),
                'sorting' => $requestObject->getSorting(),
                'fields' => $requestObject->getFields(),
            ])
        );
        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Address\ResponseAddressList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Address\ResponseAddressList',
            'json'
        );

        return $responseObject;
    }
}
