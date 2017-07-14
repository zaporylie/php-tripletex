<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Order\RequestInvoiceCreate;
use zaporylie\Tripletex\Model\Order\RequestOrderDetails;
use zaporylie\Tripletex\Model\Order\RequestOrderList;
use zaporylie\Tripletex\Model\Order\Order as OrderModel;
use zaporylie\Tripletex\Resource\Order\InvoiceCreate;
use zaporylie\Tripletex\Resource\Order\OrderCreate;
use zaporylie\Tripletex\Resource\Order\OrderDetails;
use zaporylie\Tripletex\Resource\Order\OrderList;
use zaporylie\Tripletex\Resource\Order\OrderUpdate;
use zaporylie\Tripletex\Tripletex;

class Order extends ApiBase
{

    /**
     * @param \DateTimeInterface $orderDateFrom
     * @param \DateTimeInterface $orderDateTo
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderList
     * @internal param $
     */
    public function getList(\DateTimeInterface $orderDateFrom, \DateTimeInterface $orderDateTo, $options = [])
    {
        $request = new RequestOrderList();
        $request->setOrderDateFrom($orderDateFrom);
        $request->setOrderDateTo($orderDateTo);
        // @todo: Pass options.
        $resource = new OrderList($this->app);
        return $resource->call($request);
    }

    /**
     * @param $id
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderWrapper
     */
    public function getOrder($id, $options = [])
    {
        $request = new RequestOrderDetails();
        $request->setId($id);
        // @todo: Pass options.
        $resource = new OrderDetails($this->app);
        return $resource->call($request);
    }

    /**
     * @param \zaporylie\Tripletex\Model\Order\Order $order
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderWrapper
     */
    public function updateOrder(OrderModel $order)
    {
        $resource = new OrderUpdate($this->app);
        return $resource->call($order);
    }

    /**
     * @param \zaporylie\Tripletex\Model\Order\Order $order
     *
     * @return \zaporylie\Tripletex\Model\Order\ResponseOrderWrapper
     */
    public function createOrder(OrderModel $order)
    {
        $resource = new OrderCreate($this->app);
        return $resource->call($order);
    }

    /**
     * @param $orderId
     * @param \DateTimeInterface $invoiceDate
     * @param bool $sendToCustomer
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper
     */
    public function createInvoice($orderId, \DateTimeInterface $invoiceDate, $sendToCustomer = true)
    {
        $request = new RequestInvoiceCreate();
        $request->setOrderId($orderId);
        $request->setInvoiceDate($invoiceDate);
        $request->setSendToCustomer($sendToCustomer);
        $resource = new InvoiceCreate($this->app);
        return $resource->call($request);
    }
}
