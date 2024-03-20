<?php

namespace zaporylie\Tripletex\Resource\Project;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Product\RequestProductList;
use zaporylie\Tripletex\Model\Project\RequestProjectList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class ProjectList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/project';

    /**
     * @param \zaporylie\Tripletex\Model\Product\RequestProductList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Product\ResponseProductList
     */
    public function call(RequestProjectList $requestObject)
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

        /** @var \zaporylie\Tripletex\Model\Project\ResponseProjectList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Project\ResponseProjectList',
            'json'
        );

        return $responseObject;
    }
}
