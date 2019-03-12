<?php
/**
 * Created by PhpStorm.
 * User: moeen-basra
 * Date: 2019-02-23
 * Time: 19:02
 */

namespace App\Domains\Invoices\Jobs;


use Photon\Foundation\Job;
use Photon\Foundation\Http\Request;

class ValidateStoreInputJob extends Job
{
    public function handle(Request $request) {

        $rules = [
            'type_id' => 'required',
            'type' => 'required|in:property,lease,user',
            'due_at' => 'string',
            'details' => 'array|required',
            'details.*.token' => 'required',
            'details.*.content' => 'required',
            'details.*.price' => 'required',
        ];

        return $request->validate($rules);
    }
}
