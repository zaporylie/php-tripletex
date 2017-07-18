<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Address\RequestAddressDetails;
use zaporylie\Tripletex\Model\Address\RequestAddressList;
use zaporylie\Tripletex\Resource\Address\AddressDetails;
use zaporylie\Tripletex\Resource\Address\AddressList;

class Address extends ApiBase
{
    public function getList(array $options = [])
    {
        $request = new RequestAddressList();
        // @todo: Pass options.
        $resource = new AddressList($this->app);
        return $resource->call($request);
    }

    public function getAddress($id, array $options = [])
    {
        $request = new RequestAddressDetails();
        $request->setId($id);
        // @todo: Pass options.
        $resource = new AddressDetails($this->app);
        return $resource->call($request);
    }
}
