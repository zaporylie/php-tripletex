<?php

namespace zaporylie\Tripletex\Resource\Order;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Order\OrderLine;
use zaporylie\Tripletex\Model\Order\RequestOrderLineCreate;
use zaporylie\Tripletex\Resource\ResourceBase;

class OrderLineCreate extends ResourceBase
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::POST;

    /**
     * @var string
     */
    protected $path = '/order/orderline';

    /**
     * @param \zaporylie\Tripletex\Model\Order\OrderLine $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderLineWrapper
     */
    public function call(OrderLine $requestObject)
    {
        $order = $this->app->getSerializer()->serialize($requestObject, 'json');
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
          $this->getMethod(),
          $this->getPath(),
          ['Content-Type' => 'application/json; charset=utf-8'],
          $order
        );
        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Order\ResponseOrderLineWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
          $body,
          'zaporylie\Tripletex\Model\Order\ResponseOrderLineWrapper',
          'json'
        );

        return $responseObject;
    }
}
