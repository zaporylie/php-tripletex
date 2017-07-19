<?php

namespace zaporylie\Tripletex\Resource\Order;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Order\RequestOrderLineDetails;
use zaporylie\Tripletex\Model\Order\ResponseOrderLineWrapper;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class OrderLineDetails extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/order/orderline';

    /**
     * @param \zaporylie\Tripletex\Model\Order\RequestOrderLineDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderLineWrapper
     */
    public function call(RequestOrderLineDetails $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'/'.$requestObject->getId().'?'.http_build_query([
            'fields' => $requestObject->getFields(),
            ])
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
