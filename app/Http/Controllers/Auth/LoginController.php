<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $captcha = captcha_img();

        return view('pages.admin.login')->with('list', $captcha);
        // $form = '<form method="post" action="captcha-test">';
        // $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        // $form .= '<p>' . captcha_img() . '</p>';
        // $form .= '<p><input type="text" name="captcha"></p>';
        // $form .= '<p><button type="submit" name="check">Check</button></p>';
        // $form .= '</form>';

    }
}
