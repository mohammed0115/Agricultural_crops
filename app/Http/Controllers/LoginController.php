<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Handle account login request
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
//        return $request;
//        $request->validate(LoginRequest::rules());
        $credentials = $request->only('email', 'password');
        $user = User::where('email',$request->email)->first();
//        return $user;
        if (Auth::attempt($credentials)) {

            return redirect('/');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }

    /**
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {

        return redirect()->intended();
    }
}
