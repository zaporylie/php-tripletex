<?php

namespace zaporylie\Tripletex\Resource\Invoice;

use Http\Discovery\UriFactoryDiscovery;
use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Invoice\RequestPaymentTypeDetails;
use zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeWrapper;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class PaymentTypeDetails extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/invoice/paymentType/{id}';

    /**
     * @param \zaporylie\Tripletex\Model\Invoice\RequestPaymentTypeDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeWrapper
     */
    public function call(RequestPaymentTypeDetails $requestObject)
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

        /** @var \zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
          $body,
          'zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeWrapper',
          'json'
        );

        return $responseObject;
    }
}
