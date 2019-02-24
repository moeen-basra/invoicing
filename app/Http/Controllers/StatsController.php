<?php

namespace App\Http\Controllers;

use App\Features\Inovoices\StatsFeature;
use Photon\Foundation\Controller;

class StatsController extends Controller
{
    public function index()
    {
        return $this->serve(StatsFeature::class);
    }
}
