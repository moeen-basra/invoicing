<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 01:41
 */

namespace App\Data\Models;


use Photon\Foundation\Eloquent\Model;

class Lease extends Model
{
    public function property()
    {
      return $this->belongsTo(Property::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function invoices() {
        return $this->morphMany(Invoice::class, 'invoiceable');
    }
}
