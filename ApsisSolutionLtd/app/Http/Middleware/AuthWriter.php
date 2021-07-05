<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthWriter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        ddd('AuthWriter');
        if(Auth::user()->uType == 2){
            return $next($request);
        }else{
            session()->flash('message','Fail to Login');
            return redirect()->route('login');
        }
    }

}
