<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public function redirectTo()
    {
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.registro');
    }

    public function Register(CreateUserRequest $request)
    {
        $request = $request->validated();
        $request['password'] =  bcrypt($request['password']);
        $user = ["roles_id" => 4];
        $request = array_merge($user, $request);
        User::create($request);

        return auth()->loginUsingId(User::get()->last()->id)
            ? redirect()->route('admin.index')->with('message', 'exito')
            : 'fallo';
    }
}
