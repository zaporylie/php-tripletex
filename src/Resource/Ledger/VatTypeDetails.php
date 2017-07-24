<?php

namespace zaporylie\Tripletex\Resource\Ledger;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Ledger\RequestVatTypeDetails;
use zaporylie\Tripletex\Model\Ledger\RequestVatTypeList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class VatTypeDetails extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/ledger/vatType/{id}';

    /**
     * @param \zaporylie\Tripletex\Model\Ledger\RequestVatTypeDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Ledger\ResponseVatTypeWrapper
     */
    public function call(RequestVatTypeDetails $requestObject)
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

        /** @var \zaporylie\Tripletex\Model\Ledger\ResponseVatTypeWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Ledger\ResponseVatTypeWrapper',
            'json'
        );

        return $responseObject;
    }
}
