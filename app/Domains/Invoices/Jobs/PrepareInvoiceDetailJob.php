<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 22:49
 */

namespace App\Domains\Invoices\Jobs;


use App\Data\Models\Invoice;
use Illuminate\Support\Arr;
use Photon\Foundation\Job;

class PrepareInvoiceDetailJob extends Job
{
    /** @var array $input */
    private $input;

    public function __construct(array $input)
    {
        $this->input = $input;
    }

    public function handle() {
        $invoice_detail = new Invoice\Detail();

        $invoice_detail->token = Arr::get($this->input, 'token');
        $invoice_detail->content = Arr::get($this->input, 'content');
        $invoice_detail->price = (int) Arr::get($this->input, 'price');
        $invoice_detail->discount = Arr::get($this->input, 'discount') ?? 0;
        $invoice_detail->quantity = Arr::get($this->input, 'quantity') ?? 1;
        $invoice_detail->total = $this->calculateTotal($invoice_detail);

        return $invoice_detail;
    }

    private function calculateTotal(Invoice\Detail $detail)
    {
        return ($detail->price * $detail->quantity) - $detail->discount;
    }
}
