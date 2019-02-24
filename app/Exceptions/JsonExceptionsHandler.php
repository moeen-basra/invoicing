<?php

namespace App\Exceptions;

use Exception;
use Photon\Foundation\Traits\MarshalTrait;
use Photon\Foundation\Traits\JobDispatcherTrait;
use Photon\Domains\Http\Jobs\JsonErrorResponseJob;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class JsonExceptionsHandler extends ExceptionHandler
{
    use MarshalTrait;
    use JobDispatcherTrait;

    /**
     * @param Exception $e
     * @throws Exception
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    public function render($request, Exception $e)
    {
        $message = $e->getMessage();
        $class = get_class($e);
        $code = $e->getCode();
        $trace = collect($e->getTrace());

        return $this->run(JsonErrorResponseJob::class, [
            'message' => $message,
            'code' => $class,
            'status' => ($code < 100 || $code >= 600) ? 400 : $code,
        ]);
    }
}
