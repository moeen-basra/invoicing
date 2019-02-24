<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 01:48
 */

namespace App\Features\Inovoices;


use App\Data\Models\Invoice;
use Photon\Foundation\Feature;
use Photon\Domains\Data\Jobs\BuildEloquentQueryFromRequestJob;

class ListingFeature extends Feature
{
    public function handle() {
        return $this->run(BuildEloquentQueryFromRequestJob::class, ['model' => Invoice::class]);
    }
}
