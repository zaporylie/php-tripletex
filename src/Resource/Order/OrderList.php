<?php

namespace zaporylie\Tripletex\Resource\Order;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Order\RequestOrderList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class OrderList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/order';

    /**
     * @param \zaporylie\Tripletex\Model\Order\RequestOrderList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderList
     */
    public function call(RequestOrderList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
                'orderDateFrom' => $requestObject->getOrderDateFrom()->format('c'),
                'orderDateTo' => $requestObject->getOrderDateTo()->format('c'),
                'id' => $requestObject->getId(),
                'number' => $requestObject->getNumber(),
                'customerId' => $requestObject->getCustomerId(),
                'isClosed' => $requestObject->getIsClosed(),
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

        /** @var \zaporylie\Tripletex\Model\Order\ResponseOrderList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Order\ResponseOrderList',
            'json'
        );

        return $responseObject;
    }
}
