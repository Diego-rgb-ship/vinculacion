<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Auth;

class ServEsc
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;
     /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
    
    public function handle(Request $request, Closure $next)
    {
        if($this->auth->User()->ServEsc())
        {
            return $next($request);
        }
        if($this->auth->User()->acceso())
        {
            return redirect()->route('createacces');
        }
        if($this->auth->User()->admin()){
            return $next($request);
        }
        
        else
        {
            return redirect('/');
        }  
    }
}