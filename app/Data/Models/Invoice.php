<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 01:41
 */

namespace App\Data\Models;


use App\Data\Models\Invoice\Detail;
use Photon\Foundation\Eloquent\Model;

class Invoice extends Model
{

    protected $dates = ['due_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function invoiceable()
    {
        return $this->morphTo();
    }
}
