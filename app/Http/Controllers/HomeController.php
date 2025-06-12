<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\User;
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
<<<<<<< HEAD
   
=======
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
}
