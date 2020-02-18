<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckUsersEmpty
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
        $users = User::all();

        if($users->isEmpty()){
            return redirect()->route('create');
        }
        return $next($request);
    }
}
