<?php

namespace App\Http\Middleware\Superadmin\Admin;

use Closure;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'superadmin')
    {
        if (!auth()->guard($guard)->check()) {
            return redirect()->route('admin.auth');
        }
        return $next($request);
        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
        ->header('Pragma','no-cache')
        ->header('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
    }
}
