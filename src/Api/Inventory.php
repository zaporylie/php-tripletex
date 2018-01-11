<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Inventory\RequestInventoryDetails;
use zaporylie\Tripletex\Model\Inventory\RequestInventoryList;
use zaporylie\Tripletex\Resource\Inventory\InventoryDetails;
use zaporylie\Tripletex\Resource\Inventory\InventoryList;

class Inventory extends ApiBase
{

    /**
     * @param $id
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Inventory\ResponseInventoryWrapper
     */
    public function getInventory($id, $options = [])
    {
        $request = new RequestInventoryDetails();
        $request->setId($id);
        // @todo: Add options.
        $resource = new InventoryDetails($this->app);
        return $resource->call($request);
    }

    /**
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Inventory\ResponseInventoryList
     */
    public function getInventoryList($options = [])
    {
        $request = new RequestInventoryList();
        // @todo: Add options.
        $resource = new InventoryList($this->app);
        return $resource->call($request);
    }
}
