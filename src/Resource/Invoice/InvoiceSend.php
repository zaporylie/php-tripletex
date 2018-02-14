<?php

namespace zaporylie\Tripletex\Resource\Invoice;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Invoice\RequestInvoiceSend;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class InvoiceSend extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::PUT;

    /**
     * @var string
     */
    protected $path = '/invoice/{id}/:send';

    /**
     * @param \zaporylie\Tripletex\Model\Invoice\RequestInvoiceDetails $requestObject
     *
     * @return string
     */
    public function call(RequestInvoiceSend $requestObject)
    {
        $path = str_replace('{id}', $requestObject->getId(), $this->getPath());

        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $path.'?'.http_build_query([
              'sendType' => $requestObject->getSendType(),
              'overrideEmailAddress' => $requestObject->getOverrideEmailAddress(),
            ])
        );

        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        return $response->getBody()->getContents();
    }
}
