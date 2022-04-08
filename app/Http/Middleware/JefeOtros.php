<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use App\User;

use Illuminate\Auth\AuthenticationException;

use Illuminate\Contracts\Auth\Factory as Auth;

class JefeOtros
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if($this->auth->User()->jefe_otros())
        {
            return $next($request);
        }
        if($this->auth->User()->admin()){
            return $next($request);
        }
        if($this->auth->User()->acceso())
        {
            return redirect()->route('createacces');
        }
        else
        {
            return redirect('/');
        }
    }
}
