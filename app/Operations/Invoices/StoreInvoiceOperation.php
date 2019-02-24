<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 20:04
 */

namespace App\Operations\Invoices;


use App\Data\Models\Invoice;
use Photon\Foundation\Operation;
use Illuminate\Support\Collection;
use App\Domains\Invoices\Jobs\StoreInvoiceJob;
use App\Domains\Invoices\Jobs\StoreInvoiceDetailJob;

class StoreInvoiceOperation extends Operation
{
    /** @var Invoice $invoice */
    private $invoice;

    /** @var Collection $details */
    private $details;

    /** @var array $input */
    private $input;

    public function __construct(Invoice $invoice, Collection $details, array $input)
    {
        $this->invoice = $invoice;
        $this->details = $details;
        $this->input = $input;

    }

    public function handle()
    {
        app('db')->beginTransaction();

        $invoice = $this->run(StoreInvoiceJob::class, [
            'invoice' => $this->invoice,
            'details' => $this->details,
            'input' => $this->input
        ]);

        $this->run(StoreInvoiceDetailJob::class, [
            'invoice' => $invoice,
            'details' => $this->details,
        ]);

        app('db')->commit();

        return $invoice;
    }
}
