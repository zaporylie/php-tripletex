<?php

namespace zaporylie\Tripletex\Resource\Invoice;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Invoice\RequestInvoiceList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class InvoiceList extends ResourceBase implements ResourceInterface
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
     * @param \zaporylie\Tripletex\Model\Invoice\RequestInvoiceList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceList
     */
    public function call(RequestInvoiceList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
          $this->getMethod(),
          $this->getPath().'?'.http_build_query([
            'invoiceDateFrom' => $requestObject->getInvoiceDateFrom()->format('c'),
            'invoiceDateTo' => $requestObject->getInvoiceDateTo()->format('c'),
            'id' => $requestObject->getId(),
            'invoiceNumber' => $requestObject->getInvoiceNumber(),
            'kid' => $requestObject->getKid(),
            'voucherId' => $requestObject->getVoucherId(),
            'customerId' => $requestObject->getCustomerId(),
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

        /** @var \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
          $body,
          'zaporylie\Tripletex\Model\Invoice\ResponseInvoiceList',
          'json'
        );

        return $responseObject;
    }
}
