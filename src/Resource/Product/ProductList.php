<?php

namespace zaporylie\Tripletex\Resource\Product;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Product\RequestProductList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class ProductList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/product';

    /**
     * @param \zaporylie\Tripletex\Model\Product\RequestProductList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Product\ResponseProductList
     */
    public function call(RequestProductList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
                'number' => $requestObject->getNumber(),
                'name' => $requestObject->getName(),
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

        /** @var \zaporylie\Tripletex\Model\Product\ResponseProductList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Product\ResponseProductList',
            'json'
        );

        return $responseObject;
    }
}
