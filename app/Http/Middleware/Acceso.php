<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use App\User;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Auth;

class Acceso
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

    public function handle($request, Closure $next)
    {
        $usersCount = User::count();
        if($usersCount > 1 && !\Illuminate\Support\Facades\Auth::check()){
            return redirect('/');
        }

        if($this->auth->User()->acceso())
        {
            return $next($request);
        }
        if($this->auth->User()->admin())
        {
            return redirect()->route('admin.welcome');
        }
        if($this->auth->User()->alumnos())
        {
            return redirect('/');
        }
        else
        {
            return redirect()->route('seguimiento.index');
        }
    }

}
