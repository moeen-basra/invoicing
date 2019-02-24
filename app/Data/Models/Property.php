<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 01:41
 */

namespace App\Data\Models;


use Photon\Foundation\Eloquent\Model;

class Property extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function invoices()
    {
        return $this->morphMany(Invoice::class, 'invoiceable');
    }

    public function leases()
    {
        return $this->hasMany(Lease::class, 'property_id');
    }
}
