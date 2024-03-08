<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function LoginPage(){
        return view('Auth.Login');
    }


    public function login(LoginRequest $request){
        $validatedData = $request->validated();

        if (Auth::attempt($validatedData)) {
$user=Auth::user();
            if ($user->status == 0) {
                Auth::logout(); // Log out the user
                return back()->withInput()->withErrors([
                    'email' => 'Your account is inactive. Please contact the administrator.'
                ]);

            }

            if ($user->roles->contains('name', 'admin') || $user->roles->contains('name', 'organisator')) {
                return redirect('/');
            } else {
                return redirect('/');
            }
        }
            return back()->withInput()->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);

    }




    public function RegisterPage(){
        return view('Auth.Register');
    }
    public function register(RegisterRequest $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->roles()->attach($request->role);
        Auth::login($user);

        return redirect('/');
    }
    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}




