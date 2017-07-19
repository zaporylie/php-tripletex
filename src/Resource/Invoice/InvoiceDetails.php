<?php

namespace zaporylie\Tripletex\Resource\Invoice;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Invoice\RequestInvoiceDetails;
use zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class InvoiceDetails extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/invoice';

    /**
     * @param \zaporylie\Tripletex\Model\Invoice\RequestInvoiceDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper
     */
    public function call(RequestInvoiceDetails $requestObject)
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

        /** @var \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper',
            'json'
        );

        return $responseObject;
    }
}
