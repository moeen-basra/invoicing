<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 01:41
 */

namespace App\Data\Models\Invoice;


use App\Data\Models\Invoice;
use Photon\Foundation\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'invoice_details';

    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }
}
