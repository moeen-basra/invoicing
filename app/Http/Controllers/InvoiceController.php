<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 01:50
 */

namespace App\Http\Controllers;


use App\Features\Inovoices\StoreFeature;
use Photon\Foundation\Controller;
use App\Features\Inovoices\ListingFeature;

class InvoiceController extends Controller
{
    public function index() {
        return $this->serve(ListingFeature::class);
    }

    public function store() {
        return $this->serve(StoreFeature::class);
    }
}
