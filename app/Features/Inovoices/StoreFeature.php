<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 01:48
 */

namespace App\Features\Inovoices;


use App\Data\Models\User;
use Illuminate\Support\Arr;
use App\Data\Models\Invoice;
use Photon\Foundation\Feature;
use Illuminate\Support\Collection;
use App\Data\Jobs\ResolveMorphRelationJob;
use Photon\Domains\Http\Jobs\JsonResponseJob;
use App\Operations\Invoices\StoreInvoiceOperation;
use App\Domains\Invoices\Jobs\ValidateStoreInputJob;
use App\Domains\Invoices\Jobs\PrepareInvoiceDetailJob;

class StoreFeature extends Feature
{
    public function handle() {
        $input = $this->run(ValidateStoreInputJob::class);

        $user = User::find(1);

        // resolve morph relation class name
        $morph_class = $this->run(ResolveMorphRelationJob::class, [
            'relation_name' => Arr::get($input, 'type')
        ]);

        // check if relation exists or throw exception
        $relation = $morph_class::findOrFail(Arr::get($input, 'type_id'));

        // initiate invoice object
        $invoice = new Invoice();

        $invoice->num = 'INV-12-' . mt_rand(10000, 99999);
        $invoice->user()->associate($user);
        $invoice->invoiceable()->associate($relation);

        // prepare invoice details data
        $details_collection = $this->processDetails($input['details']);

        // save the invoice
        $invoice = $this->run(StoreInvoiceOperation::class, [
            'invoice' => $invoice,
            'details' => $details_collection,
            'input' => Arr::except($input, 'details'),
        ]);

        return $this->run(new JsonResponseJob($invoice));
    }

    private function processDetails(array $input)
    {
        return Collection::make($input)
            ->map(function($detail){
                return $this->run(PrepareInvoiceDetailJob::class, [
                    'input' => $detail,
                ]);
            });
    }
}
