<?php

use Illuminate\Support\Arr;
use Symfony\Component\VarDumper\VarDumper;

function clog($data, $trace = true)
{
    try {
        throw new \Exception('log');
    } catch (\Exception $e) {
        $t = $e->getTrace()[0];
        $method = "{$t['file']} at line ({$t['line']})";
        $trace = $trace ? $e->getTraceAsString() : null;
        VarDumper::dump(compact('method', 'data', 'trace'));
    }
}

function isRedirect()
{
    return Arr::get($_SERVER, 'HTTP_X_FORWARDED_SERVER') === config('app.old_domain');
}

//if (! function_exists('route')) {
//    /**
//     * Generate the URL to a named route.
//     *
//     * @param  string  $name
//     * @param  mixed  $parameters
//     * @param  bool  $absolute
//     * @return string
//     */
//    function route($name, $parameters = [], $absolute = true)
//    {
//        return app('url')->route($name, $parameters, $absolute);
//    }
//}
