<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Customer\Customer as CustomerModel;
use zaporylie\Tripletex\Model\Customer\RequestCustomerDetails;
use zaporylie\Tripletex\Model\Customer\RequestCustomerList;
use zaporylie\Tripletex\Resource\Customer\CustomerCreate;
use zaporylie\Tripletex\Resource\Customer\CustomerDetails;
use zaporylie\Tripletex\Resource\Customer\CustomerList;
use zaporylie\Tripletex\Resource\Customer\CustomerUpdate;

class Customer extends ApiBase
{

    /**
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Customer\ResponseCustomerList
     */
    public function getList(array $options = [])
    {
        $request = new RequestCustomerList();
        // @todo: Pass options.
        $resource = new CustomerList($this->app);
        return $resource->call($request);
    }

    /**
     * @param \zaporylie\Tripletex\Model\Customer\Customer $customer
     *
     * @return \zaporylie\Tripletex\Model\Customer\ResponseCustomerWrapper
     */
    public function createCustomer(CustomerModel $customer)
    {
        $resource = new CustomerCreate($this->app);
        return $resource->call($customer);
    }

    /**
     * @param $id
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Customer\ResponseCustomerWrapper
     */
    public function getCustomer($id, array $options = [])
    {
        $request = new RequestCustomerDetails();
        $request->setId($id);
        // @todo: Pass options.
        $resource = new CustomerDetails($this->app);
        return $resource->call($request);
    }

    /**
     * @param \zaporylie\Tripletex\Model\Customer\Customer $customer
     *
     * @return \zaporylie\Tripletex\Model\Customer\ResponseCustomerWrapper
     */
    public function updateCustomer(CustomerModel $customer)
    {
        $resource = new CustomerUpdate($this->app);
        return $resource->call($customer);
    }
}
