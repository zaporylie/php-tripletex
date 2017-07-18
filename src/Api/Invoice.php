<?php

namespace zaporylie\Tripletex\Api;

use zaporylie\Tripletex\Model\Invoice\RequestInvoiceCreate;
use zaporylie\Tripletex\Model\Invoice\RequestInvoiceDetails;
use zaporylie\Tripletex\Model\Invoice\RequestInvoiceList;
use zaporylie\Tripletex\Model\Invoice\Invoice as InvoiceModel;
use zaporylie\Tripletex\Model\Invoice\RequestInvoicePayment;
use zaporylie\Tripletex\Model\Invoice\RequestInvoicePdf;
use zaporylie\Tripletex\Model\Invoice\RequestPaymentTypeDetails;
use zaporylie\Tripletex\Model\Invoice\RequestPaymentTypeList;
use zaporylie\Tripletex\Resource\Invoice\InvoiceCreate;
use zaporylie\Tripletex\Resource\Invoice\InvoiceDetails;
use zaporylie\Tripletex\Resource\Invoice\InvoiceList;
use zaporylie\Tripletex\Resource\Invoice\InvoicePayment;
use zaporylie\Tripletex\Resource\Invoice\InvoicePdf;
use zaporylie\Tripletex\Resource\Invoice\PaymentTypeDetails;
use zaporylie\Tripletex\Resource\Invoice\PaymentTypeList;

class Invoice extends ApiBase
{

    /**
     * @param \DateTimeInterface $invoiceDateFrom
     * @param \DateTimeInterface $invoiceDateTo
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceList
     * @internal param $
     */
    public function getList(\DateTimeInterface $invoiceDateFrom, \DateTimeInterface $invoiceDateTo, $options = [])
    {
        $request = new RequestInvoiceList();
        $request->setInvoiceDateFrom($invoiceDateFrom);
        $request->setInvoiceDateTo($invoiceDateTo);
        // @todo: Pass options.
        $resource = new InvoiceList($this->app);
        return $resource->call($request);
    }

    /**
     * @param \zaporylie\Tripletex\Model\Invoice\Invoice $invoice
     * @param bool $sendToCustomer
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper
     */
    public function createInvoice(InvoiceModel $invoice, $sendToCustomer = true)
    {
        $request = new RequestInvoiceCreate();
        $request->setInvoice($invoice);
        $request->setSendToCustomer($sendToCustomer);
        $resource = new InvoiceCreate($this->app);
        return $resource->call($request);
    }

    /**
     * @param $invoiceId
     * @param \DateTimeInterface $paymentDate
     * @param $paymentTypeId
     * @param $paidAmount
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper
     */
    public function updatePayment($invoiceId, \DateTimeInterface $paymentDate, $paymentTypeId, $paidAmount)
    {
        $request = new RequestInvoicePayment();
        $request->setInvoiceId($invoiceId);
        $request->setPaymentDate($paymentDate);
        $request->setPaymentTypeId($paymentTypeId);
        $request->setPaidAmount($paidAmount);

        $resource = new InvoicePayment($this->app);
        return $resource->call($request);
    }

    /**
     * @param $id
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponseInvoiceWrapper
     */
    public function getInvoice($id, $options = [])
    {
        $request = new RequestInvoiceDetails();
        $request->setId($id);
        // @todo: Pass options.
        $resource = new InvoiceDetails($this->app);
        return $resource->call($request);
    }

    /**
     * @param $id
     * @param array $options
     *
     * @return string
     */
    public function getInvoicePdf($id, $options = [])
    {
        $request = new RequestInvoicePdf();
        $request->setId($id);
        // @todo: Pass options.
        $resource = new InvoicePdf($this->app);
        return $resource->call($request);
    }

    /**
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeList
     */
    public function getPaymentTypeList($options = [])
    {
        $request = new RequestPaymentTypeList();
        // @todo: Pass options.
        $resource  = new PaymentTypeList($this->app);
        return $resource->call($request);
    }

    /**
     * @param $id
     * @param array $options
     *
     * @return \zaporylie\Tripletex\Model\Invoice\ResponsePaymentTypeWrapper
     */
    public function getPaymentType($id, $options = [])
    {
        $request = new RequestPaymentTypeDetails();
        $request->setId($id);
        // @todo: Pass options.
        $resource = new PaymentTypeDetails($this->app);
        return $resource->call($request);
    }
}
