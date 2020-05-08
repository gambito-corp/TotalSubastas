<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\CreateUserRequest;

class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(){$this->middleware('guest');}

    public function ShowRegistrationForm(){return view('auth.register');}

    public function register(CreateUserRequest $request)
    {
        $request->validated();
        $user = User::create($request->validated());
        $this->guard()->login($user);
        if ($response = $this->registered($request, $user)) {
            return $response;
        }
        return $request->wantsJson()
                    ? new Response('', 201)
                    : redirect($this->redirectTo);
    }

    protected function guard(){return Auth::guard();}

    protected function Registered(Request $request, $user){}
}
