<?php

namespace zaporylie\Tripletex\Api;

//use zaporylie\Tripletex\Model\Employee\RequestEmployeeDetails;
use zaporylie\Tripletex\Model\Employee\RequestEmployeeList;
//use zaporylie\Tripletex\Resource\Employee\EmployeeDetails;
use zaporylie\Tripletex\Resource\Employee\EmployeeList;
use zaporylie\Tripletex\Tripletex;

class Employee extends ApiBase
{
    /**
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Employee\ResponseEmployeeList
     */
    public function getList($options = [])
    {
        $request = new RequestEmployeeList();
        // @todo: Pass options.
        $resource = new EmployeeList($this->app);
        return $resource->call($request);
    }
}
?>
