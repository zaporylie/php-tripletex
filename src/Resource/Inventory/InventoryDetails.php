<?php

namespace zaporylie\Tripletex\Resource\Inventory;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Inventory\RequestInventoryDetails;
use zaporylie\Tripletex\Model\Inventory\RequestInventoryList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class InventoryDetails extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/inventory/{id}';

    /**
     * @param \zaporylie\Tripletex\Model\Inventory\RequestInventoryDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Inventory\ResponseInventoryWrapper
     */
    public function call(RequestInventoryDetails $requestObject)
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

        /** @var \zaporylie\Tripletex\Model\Inventory\ResponseInventoryWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Inventory\ResponseInventoryWrapper',
            'json'
        );

        return $responseObject;
    }
}
