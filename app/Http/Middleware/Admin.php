<?php

namespace trial\Http\Middleware;

use Closure;

use trial\teachers;

class Admin
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

        return redirect('/');
       
    }
}
