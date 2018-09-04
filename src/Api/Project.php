<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Product\RequestProductDetails;
use zaporylie\Tripletex\Model\Product\RequestProductList;
use zaporylie\Tripletex\Model\Project\RequestProjectList;
use zaporylie\Tripletex\Resource\Product\ProductDetails;
use zaporylie\Tripletex\Resource\Product\ProductList;
use zaporylie\Tripletex\Resource\Project\ProjectList;

class Project extends ApiBase
{

    /**
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Product\ResponseProductList
     */
    public function getList($options = [])
    {
        $request = new RequestProjectList();
        // @todo: Pass options.
        $resource = new ProjectList($this->app);
        return $resource->call($request);
    }

}
