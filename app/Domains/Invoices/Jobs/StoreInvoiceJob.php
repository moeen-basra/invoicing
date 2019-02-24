<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 19:02
 */

namespace App\Domains\Invoices\Jobs;


use Photon\Foundation\Job;
use Illuminate\Support\Arr;
use App\Data\Models\Invoice;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Photon\Foundation\Exceptions\Exception;

class StoreInvoiceJob extends Job
{
    private $invoice;
    private $details;
    private $input;

    public function __construct(Invoice $invoice, Collection $details,  array $input)
    {
        $this->invoice = $invoice;
        $this->details = $details;
        $this->input = $input;
    }

    public function handle() {
        $price = $this->details->sum('price');
        $discount = $this->details->sum('discount');

        $this->invoice->price = $price;
        $this->invoice->discount = $discount;
        $this->invoice->total = $price - $discount;
        $this->invoice->status = Arr::get($this->input, 'status') ?? 'pending';
        $this->invoice->due_at = Carbon::parse(Arr::get($this->input, 'status'));

        if (!$this->invoice->save()) {
            // rollback transaction and throw exception
            app('db')->rollBack();
            throw new Exception('Unable to save invoice');
        }
        return $this->invoice;
    }


}
