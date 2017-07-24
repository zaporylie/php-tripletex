<?php

namespace zaporylie\Tripletex\Resource\Ledger;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Ledger\RequestVatTypeList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class VatTypeList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/ledger/vatType';

    /**
     * @param \zaporylie\Tripletex\Model\Ledger\RequestVatTypeList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Ledger\ResponseVatTypeList
     */
    public function call(RequestVatTypeList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
            'id' => $requestObject->getId(),
            'number' => $requestObject->getNumber(),
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

        /** @var \zaporylie\Tripletex\Model\Ledger\ResponseVatTypeList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Ledger\ResponseVatTypeList',
            'json'
        );

        return $responseObject;
    }
}
