<?php

namespace zaporylie\Tripletex\Resource\Customer;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Customer\RequestCustomerDetails;
use zaporylie\Tripletex\Model\Customer\RequestCustomerList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class CustomerDetails extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/customer/{id}';

    /**
     * @param \zaporylie\Tripletex\Model\Customer\RequestCustomerDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Customer\ResponseCustomerWrapper
     */
    public function call(RequestCustomerDetails $requestObject)
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
