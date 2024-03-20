<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Project\RequestProjectList;
use zaporylie\Tripletex\Resource\Project\ProjectList;

class Project extends ApiBase
{

    /**
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Project\ResponseProjectList
     */
    public function getList($options = [])
    {
        $request = new RequestProjectList();
        // @todo: Pass options.
        $resource = new ProjectList($this->app);
        return $resource->call($request);
    }
}
