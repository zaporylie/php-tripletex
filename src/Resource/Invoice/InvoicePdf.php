<?php

namespace zaporylie\Tripletex\Resource\Invoice;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Invoice\RequestInvoicePdf;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class InvoicePdf extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/invoice/{id}/pdf';

    /**
     * @param \zaporylie\Tripletex\Model\Invoice\RequestInvoiceDetails $requestObject
     *
     * @return string
     */
    public function call(RequestInvoicePdf $requestObject)
    {
        $path = str_replace('{id}', $requestObject->getId(), $this->getPath());

        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $path,
            ['Accept' => 'application/octet-stream']
        );

        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        return $response->getBody()->getContents();
    }
}
