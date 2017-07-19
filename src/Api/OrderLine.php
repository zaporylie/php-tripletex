<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Order\OrderLine as OrderLineModel;
use zaporylie\Tripletex\Model\Order\RequestOrderLineDetails;
use zaporylie\Tripletex\Resource\Order\OrderLineCreate;
use zaporylie\Tripletex\Resource\Order\OrderLineDetails;
use zaporylie\Tripletex\Resource\Order\OrderLinesCreate;

class OrderLine extends ApiBase
{
    /**
     * @param int $id
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderLineWrapper
     */
    public function getOrderLine($id, $options = [])
    {
        $request = new RequestOrderLineDetails();
        $request->setId($id);
        // @todo: Pass options.
        $resource = new OrderLineDetails($this->app);
        return $resource->call($request);
    }

    /**
     * @param \zaporylie\Tripletex\Model\Order\OrderLine $orderLine
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderLineWrapper
     */
    public function createOrderLine(OrderLineModel $orderLine)
    {
        $resource = new OrderLineCreate($this->app);
        return $resource->call($orderLine);
    }

    /**
     * @param \zaporylie\Tripletex\Model\Order\OrderLine[] $orderLine
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderLineList
     */
    public function createOrderLines(array $orderLine)
    {
        $resource = new OrderLinesCreate($this->app);
        return $resource->call($orderLine);
    }
}
