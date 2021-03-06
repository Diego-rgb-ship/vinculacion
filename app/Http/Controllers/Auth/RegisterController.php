<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Alumno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('acceso');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => 'required|string|min:4|max:32',
            'apellido_p' => 'required|string|min:4|max:15',
            'apellido_m' => 'required|string|min:4|max:15',
            'no_identificacion' => 'required|integer|min:10000000|max:99999999|confirmed|unique:users,no_identificacion',
            //'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:16|confirmed',
        ],
    [
            'nombres.required' => 'El (Los) nombre(s) es obligatorio.',
            'nombres.min'  => 'El (Los) nombre(s) debe contener al menos 4 caracteres.',
            'nombres.max'  => 'El (Los) nombre(s) debe contener como maximo 32 caracteres.',
            'apellido_p.required' => 'El apellido paterno es obligatorio.',
            'apellido_p.min'  => 'El apellido paterno debe contener al menos 4 caracteres.',
            'apellido_p.max'  => 'El apellido paterno debe contener como maximo 15 caracteres.',
            'apellido_m.required' => 'El apellido materno es obligatorio.',
            'apellido_m.min'  => 'El apellido materno debe contener al menos 4 caracteres.',
            'apellido_m.max'  => 'El apellido materno debe contener como maximo 15 caracteres.',
            'no_identificacion.required' => 'El n??mero de control es obligatorio.',
            'no_identificacion.integer' => 'El n??mero de control bebe ser num??rico.',
            'no_identificacion.min'=> 'El n??mero de control bebe contener al menos 8 caracteres.',
            'no_identificacion.max'=> 'El n??mero de control bebe contener como maximo 8 caracteres.',
            'no_identificacion.unique'=> 'Este n??mero de control ya est?? en uso.',
            'no_identificacion.confirmed'=> 'La confirmaci??n del n??mero de control no coicide con el n??mero de control.',
            'password.required' => 'La contrase??a es obligatorio.',
            'password.min' => 'La contrase??a debe contener al menos 6 caracteres.',
            'password.max' => 'La contrase??a debe contener como maximo 16 caracteres.',
            'password.confirmed'=> 'La confirmaci??n de la contrase??a no coicide con la contrase??a.',  
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'id' => $data['no_identificacion'],
            'nombres' => $data['nombres'],
            'apellido_p' => $data['apellido_p'],
            'apellido_m' => $data['apellido_m'],
            'no_identificacion' => $data['no_identificacion'],
            'rol' => 'Alumno',
            'carrera' => 'otro',
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('acceso.create');
    }
}
