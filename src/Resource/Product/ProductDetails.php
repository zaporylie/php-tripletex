<?php

namespace zaporylie\Tripletex\Resource\Product;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Product\RequestProductDetails;
use zaporylie\Tripletex\Model\Product\ResponseProductWrapper;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class ProductDetails extends ResourceBase implements ResourceInterface
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
     * @param \zaporylie\Tripletex\Model\Product\RequestProductDetails $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Product\ResponseProductWrapper
     */
    public function call(RequestProductDetails $requestObject)
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

        /** @var \zaporylie\Tripletex\Model\Product\ResponseProductWrapper $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Product\ResponseProductWrapper',
            'json'
        );

        return $responseObject;
    }
}
