<?php

namespace App\Http\Middleware;

use App\Http\Models\Page;
use Closure;
use Illuminate\Support\Facades\Auth;

class ManagePages
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Auth::user()->cannot('manage_pages', Page::class)){
            abort(401);
        }
        return $next($request);

    }
}
