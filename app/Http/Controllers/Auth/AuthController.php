<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\WelcomeMail;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

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
                Auth::logout();
                return back()->withInput()->withErrors([
                    'email' => 'Your account is inactive. Please contact the administrator.'
                ]);

            }
            if ($user->isAdmin() ) {
                return redirect()->route('admin.events.index');
            } elseif($user->isOrganisator()) {
                return redirect()->route('my.events');
            }else{
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
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $user->addMedia($file)->toMediaCollection('profile');
        }

        Mail::to($request->email)->send(new WelcomeMail());

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





    public function resetPasswordPage(Request $request){
        $token = $request->query('token');
        $email = $request->query('email');
        return view('Auth.resetPassword', [
            'token' => $token,
            'email' => $email
        ]);
    }

    public function forgetPasswordPage(){
        return view('Auth.forgotPassword');
    }
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }


    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}




