<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 01:48
 */

namespace App\Features\Inovoices;

use App\Data\Models\Property;
use App\Data\Models\Invoice;
use Photon\Foundation\Feature;
use Photon\Domains\Http\Jobs\JsonResponseJob;
use Photon\Domains\Data\Jobs\BuildEloquentQueryFromRequestJob;

class StatsFeature extends Feature
{
    public function handle() {
        $subquery = \DB::table('leases')->distinct()->select('property_id');

        $query = Property::selectRaw('COUNT(*) AS count, "total" AS type');
        
        $vacant = Property::selectRaw('COUNT(*) AS count, "vacant" AS type')
                    ->whereNotIn('id', $subquery);

        $dueinvoices = Invoice::selectRaw('COUNT(*) AS count, "invoices_due" AS type')
                    ->where("status", '=', 'pending');
        $paidinvoices = Invoice::selectRaw('COUNT(*) AS count, "invoices_paid" AS type')
                    ->where("status", '=', 'paid');     
        
        $stats = $query->union($vacant)->union($dueinvoices)->union($paidinvoices)->get();
        
        return $this->run(new JsonResponseJob($stats)); 
    }
}
