<?php

namespace zaporylie\Tripletex\Resource\Inventory;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Inventory\RequestInventoryList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class InventoryList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/inventory';

    /**
     * @param \zaporylie\Tripletex\Model\Inventory\RequestInventoryList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Inventory\ResponseInventoryList
     */
    public function call(RequestInventoryList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
            'id' => $requestObject->getId(),
            'number' => $requestObject->getNumber(),
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

        /** @var \zaporylie\Tripletex\Model\Inventory\ResponseInventoryList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Inventory\ResponseInventoryList',
            'json'
        );

        return $responseObject;
    }
}
