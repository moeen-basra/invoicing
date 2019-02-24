<?php

namespace App\Data\Models;

use Photon\Foundation\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function leases()
    {
        return $this->hasMany(Lease::class, 'client_id');
    }
}
