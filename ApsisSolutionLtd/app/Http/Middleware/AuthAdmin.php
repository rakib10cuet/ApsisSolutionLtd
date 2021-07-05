<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/*
 * user wise sign up
 *
 * */



class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        if(Auth::user()->uType == 1){
            return $next($request);
        }else{
            session()->flash('message','Fail to Login');
            return redirect()->route('login');
        }
    }


}
