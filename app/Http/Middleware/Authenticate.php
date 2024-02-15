<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Authenticate extends Middleware
{

    public function handle(Request $request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);
        $request->merge(['user' => Auth::user()]);
        View::share('user', Auth::user());
        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
