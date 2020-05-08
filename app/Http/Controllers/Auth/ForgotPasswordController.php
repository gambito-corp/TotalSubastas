<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function SowhLinkRequestForm()
    {
        return view('auth.passwords.email');
    }




    public function SendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }

    public function validateEmail(Request $request)
    {
        $this->validate(
            $request, [
                'email' => 'required|email'
            ]
            );
    }




















    // /*
    // |--------------------------------------------------------------------------
    // | Password Reset Controller
    // |--------------------------------------------------------------------------
    // |
    // | This controller is responsible for handling password reset emails and
    // | includes a trait which assists in sending these notifications from
    // | your application to your users. Feel free to explore this trait.
    // |
    // */

    // use SendsPasswordResetEmails;
}
