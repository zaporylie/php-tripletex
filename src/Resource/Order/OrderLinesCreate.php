<?php

namespace zaporylie\Tripletex\Resource\Order;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Resource\ResourceBase;

class OrderLinesCreate extends ResourceBase
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::POST;

    /**
     * @var string
     */
    protected $path = '/order/orderline/list';

    /**
     * @param \zaporylie\Tripletex\Model\Order\OrderLine[] $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderLineList
     */
    public function call(array $requestObject)
    {
        $orders = $this->app->getSerializer()->serialize($requestObject, 'json');
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath(),
            ['Content-Type' => 'application/json; charset=utf-8'],
            $orders
        );
        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Order\ResponseOrderLineList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Order\ResponseOrderLineList',
            'json'
        );

        return $responseObject;
    }
}
