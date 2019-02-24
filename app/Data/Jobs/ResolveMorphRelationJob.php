<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 20:20
 */

namespace App\Data\Jobs;


use App\Data\Models\User;
use App\Data\Models\Lease;
use App\Data\Models\Property;

class ResolveMorphRelationJob
{
    private $relation_name;

    public function __construct(string $relation_name)
    {
        $this->relation_name = $relation_name;
    }

    public function handle() {
        switch ($this->relation_name) {
            case 'property':
                return Property::class;
            case 'lease':
                return Lease::class;
            default:
                return User::class;
        }
    }
}
