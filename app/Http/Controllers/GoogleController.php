<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        try {
            $google_user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('home');
        }

            $finduser = User::where('social_id', $google_user->id)->first();

            if($finduser){
                Auth::login($finduser, true);
                $role=Auth::user()->role;

                if($role == 'admin'){
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('home');
                }

            }else{
            $newUser = User::create([
                'name' => $google_user->name,
                'email' => $google_user->email,
                'social_id' => $google_user->id,
                'social_type'=> 'google',
                'role' => 'user',
                'password' => encrypt('my-google')

            ]);

                Auth::login($newUser);
                return redirect()->route('dashboard');
            }


    }
}
