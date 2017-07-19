<?php

namespace zaporylie\Tripletex\Resource\Customer;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Customer\RequestCustomerList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class CustomerList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/customer';

    /**
     * @param \zaporylie\Tripletex\Model\Customer\RequestCustomerList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Customer\ResponseCustomerList
     */
    public function call(RequestCustomerList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
            'id' => $requestObject->getId(),
            'customerAccountNumber' => $requestObject->getCustomerAccountNumber(),
            'isInactive' => $requestObject->getIsInactive(),
            'accountManagerId' => $requestObject->getAccountManagerId(),
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

        /** @var \zaporylie\Tripletex\Model\Customer\ResponseCustomerList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Customer\ResponseCustomerList',
            'json'
        );

        return $responseObject;
    }
}
