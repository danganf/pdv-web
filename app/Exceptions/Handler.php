<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Facades\App\MyClass\Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        if( strpos( $request->path(), 'api/' ) !== FALSE ){
            $return = Response::factory($exception);
            if ( is_array( $return ) ){
                $code =  array_get( $return, 'code', null );
                $code = !$code ? $exception->getCode() : $code;
                $code = !$code ? 400                   : $code;
                //dd( $return, $code );
                return msgErroJson($return['messages'], $code);
            }
        }
        return parent::render($request, $exception);
    }
}
