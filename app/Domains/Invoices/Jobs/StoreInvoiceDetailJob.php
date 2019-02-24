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

class StoreInvoiceDetailJob extends Job
{
    /** @var Invoice $invoice */
    private $invoice;
    /** @var Collection $details */
    private $details;

    public function __construct(Invoice $invoice, Collection $details)
    {
        $this->invoice = $invoice;
        $this->details = $details;
    }

    public function handle() {

        /** @var Invoice\Detail $detail */
        foreach ($this->details as $detail) {
            $detail->invoice()->associate($this->invoice);

            if (!$detail->save()) {
                app('db')->rollBack();
                throw new Exception('Unable to save invoice detail');
            }
        }

        return true;
    }


}
