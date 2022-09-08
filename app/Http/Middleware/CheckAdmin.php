<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        //identify auth user
        $currentUser=auth()->user();
        //check just access admin
        if($currentUser->admin)
        return $next($request); //go to next level
        else
        return redirect('/');
    }
}
