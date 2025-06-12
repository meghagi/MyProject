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
    protected $redirectTo = '/home';
    protected $redirectTo1 = '/dashboard';
 
  protected $redirectTo2 = '/admindashboard';
  protected $redirectTo3 = '/dashboard1';
 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    protected function authenticated($request, $user)
    {
        // Check if the authenticated user is an admin
        if ($user->isAdmin()) {
            return redirect()->intended('/admindashboard');
        }

        // return redirect()->intended('/dashboard');
        return redirect()->intended('/dashboard1');
}
// protected function authenticated($request, $user)
// {
//     // If the user has both roles (admin and user), redirect to the index page
//     if ($user->isAdmin() || $user->isuser()) {
//         return redirect()->intended('/index/{id?}');
//     }

//    }
//    protected function authenticated1($request, $user)
// {  
//    // If the user is only an admin, redirect to the admin dashboard
//     if ($user->isAdmin()) {
//         return redirect()->intended('/admindashboard');
//     }

//     // If the user is only a user, redirect to the user dashboard
//     if ($user->isuser()) {
//         return redirect()->intended('/dashboard1');
//     }

//     // Default fallback
//     return redirect()->intended('/index');
// }

}