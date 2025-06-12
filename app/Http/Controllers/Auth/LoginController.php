<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

=======
use Illuminate\Foundation\Auth\AuthenticatesUsers;
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a

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
<<<<<<< HEAD
  
     */
//     public function authenticate()
// {
//     if (Auth::user()->role == 'admin') {
//         return redirect()->route('admin/dashboard')->with('status', 'Welcome to Admin Dashboard');
//     } else {
//         return redirect()->route('dashboard')->with('status', 'Welcome to user Dashboard');
//     }
// }
// public function authenticate(Request $request)
// {
//     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//         $user = Auth::user();

//         if ($user->role == 'admin') {
//             return redirect()->route('/admindashboard');
//         } else {
//             return redirect()->route('/dashboard');
//         }
//     }

//     return back()->withErrors(['email' => 'Invalid credentials']);
// }

    //protected $redirectTo = '/';
   protected $redirectTo = '/dashboard';
 
  protected $redirectTo1 = '/admindashboard';
=======
     */
    protected $redirectTo = '/home';
    protected $redirectTo1 = '/dashboard';
 
  protected $redirectTo2 = '/admindashboard';
  protected $redirectTo3 = '/dashboard1';
 

>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD


    // protected $redirectTo = '/'; // Default redirect path

// protected function redirectTo() {
//     if (Auth::user()->Role === 'admin') {
//         return redirect()->route('/admindashboard');
//     } else if (Auth::user()->Role === 'user') {
//         return redirect()->route('/dashboard');
//     } else {
//         return '/';
//     }
// }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
=======
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
    }
    protected function authenticated($request, $user)
    {
        // Check if the authenticated user is an admin
        if ($user->isAdmin()) {
            return redirect()->intended('/admindashboard');
        }

<<<<<<< HEAD
        return redirect()->intended('/dashboard');
    }
}
   

=======
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
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
