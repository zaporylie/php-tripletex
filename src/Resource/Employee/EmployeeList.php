<?php

namespace zaporylie\Tripletex\Resource\Employee;

use zaporylie\Tripletex\Client\RequestMethod;
use zaporylie\Tripletex\Model\Employee\RequestEmployeeList;
use zaporylie\Tripletex\Resource\ResourceBase;
use zaporylie\Tripletex\Resource\ResourceInterface;

class EmployeeList extends ResourceBase implements ResourceInterface
{

    /**
     * @var \zaporylie\Tripletex\Client\RequestMethod
     */
    protected $method = RequestMethod::GET;

    /**
     * @var string
     */
    protected $path = '/employee';

    /**
     * @param \zaporylie\Tripletex\Model\Employee\RequestEmployeeList $requestObject
     *
     * @return \zaporylie\Tripletex\Model\Employee\ResponseEmployeeList
     */
    public function call(RequestEmployeeList $requestObject)
    {
        /** @var \Psr\Http\Message\RequestInterface $request */
        $request = $this->app->getClient()->messageFactoryDiscovery()->createRequest(
            $this->getMethod(),
            $this->getPath().'?'.http_build_query([
                'id'                           => $requestObject->getId(),
                'firstName'                    => $requestObject->getFirstName(),
                'lastName'                     => $requestObject->getLastName(),
                'employeeNumber'               => $requestObject->getEmployeeNumber(),
                'allowInformationRegistration' => $requestObject->getAllowInformationRegistration(),
                'departmentId'                 => $requestObject->getDepartmentId(),
                'onlyProjectManagers'          => $requestObject->getOnlyProjectManagers(),
                'from'                         => $requestObject->getFrom(),
                'count'                        => $requestObject->getCount(),
                'sorting'                      => $requestObject->getSorting(),
                'fields'                       => $requestObject->getFields()
            ])
        );
        
        /** @var \Psr\Http\Message\ResponseInterface $response */
        $response = $this->doRequest($request);

        // Get response.
        $body = $response->getBody()->getContents();

        /** @var \zaporylie\Tripletex\Model\Employee\ResponseEmployeeList $responseObject */
        // Deserialize response.
        $responseObject = $this->app->getSerializer()->deserialize(
            $body,
            'zaporylie\Tripletex\Model\Employee\ResponseEmployeeList',
            'json'
        );
        return $responseObject;
    }
}
