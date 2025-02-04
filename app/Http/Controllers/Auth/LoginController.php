<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request; // تأكد إنك تضيف الـ use دي في أعلى الملف

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home'; 

    public function __construct()
    {
      
    }

    /**
     * بعد ما المستخدم يسجل دخول، هيوجهنا على الصفحة اللي بنحددها.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('home');  // هيوجهك مباشرة للـ Home
    }
}

