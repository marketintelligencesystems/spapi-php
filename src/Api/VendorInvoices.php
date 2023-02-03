<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-01-09
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/vendor-invoices-api-model/vendorInvoices.json
* Source MD5 signature: 5b89fe869c8bcd8b603ee348a4189357
*
*
* Selling Partner API for Retail Procurement Payments
* The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class VendorInvoices extends Client {

  /**
  * Operation submitInvoices
  *
  */
  public function submitInvoices($body = [])
  {
    return $this->send("/vendor/payments/v1/invoices", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function submitInvoicesAsync($body = [])
  {
    return $this->sendAsync("/vendor/payments/v1/invoices", [
      'method' => 'POST',
      'json' => $body
    ]);
  }
}
