<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Ledger\RequestVatTypeDetails;
use zaporylie\Tripletex\Model\Ledger\RequestVatTypeList;
use zaporylie\Tripletex\Resource\Ledger\VatTypeDetails;
use zaporylie\Tripletex\Resource\Ledger\VatTypeList;

class Ledger extends ApiBase
{

    /**
     * @param $id
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Ledger\ResponseVatTypeWrapper
     */
    public function getVatType($id, $options = [])
    {
        $request = new RequestVatTypeDetails();
        $request->setId($id);
        // @todo: Add options.
        $resource = new VatTypeDetails($this->app);
        return $resource->call($request);
    }

    /**
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Ledger\ResponseVatTypeList
     */
    public function getVatTypeList($options = [])
    {
        $request = new RequestVatTypeList();
        // @todo: Add options.
        $resource = new VatTypeList($this->app);
        return $resource->call($request);
    }
}
