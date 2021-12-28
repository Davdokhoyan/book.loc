<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        if (Auth::check()){
            if (Auth::user()->user_type_id === 1){
                return $next($request);
            }
//        }
//        abort(403, 'Permission denied');
        return response()
            ->view('errors.403', ['error' => 'Permission denied'], 403);
    }
}
