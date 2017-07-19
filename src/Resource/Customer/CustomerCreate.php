<?php

namespace zaporylie\Tripletex\Resource\Customer;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Customer\Customer;
use zaporylie\Tripletex\Model\Customer\RequestCustomerList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class CustomerCreate extends ResourceBase implements ResourceInterface
{
    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::POST;

    /**
     * @var string
     */
    protected $path = '/customer';

    /**
     * @param \zaporylie\Tripletex\Model\Customer\RequestCustomerDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Customer\ResponseCustomerWrapper
     */
    public function call(Customer $requestObject)
    {
        $customer = $this->app->getSerializer()->serialize($requestObject, 'json');

        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath(),
            ['Content-Type' => 'application/json; charset=utf-8'],
            $customer
        );

        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Customer\ResponseCustomerWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Customer\ResponseCustomerWrapper',
            'json'
        );

        return $responseObject;
    }
}
