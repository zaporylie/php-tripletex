<?php

namespace zaporylie\Tripletex\Resource\Invoice;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Invoice\RequestPaymentTypeList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class PaymentTypeList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/invoice/paymentType';

    /**
     * @param \zaporylie\Tripletex\Model\Invoice\RequestPaymentTypeList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeList
     */
    public function call(RequestPaymentTypeList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
            'id' => $requestObject->getId(),
            'description' => $requestObject->getDescription(),
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

        /** @var \zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeList',
            'json'
        );

        return $responseObject;
    }
}
