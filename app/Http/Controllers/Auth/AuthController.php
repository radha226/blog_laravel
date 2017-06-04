<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Socialite;
use App\User;
use Hash;
class AuthController extends Controller
{
	protected $redirectTo = '/';
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }
    public function findOrCreateUser($user, $provider)
    {
    	//dd($user);
       // $authUser = User::where('provider_id', $user->id)->first();
        // if ($authUser) {
        //     return $authUser;
        // }
        // dd($user);
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => Hash::make('secret'),
            'status' => 'user',
            'images' => 'profile.jpg',
            'api_token' => Hash::make(123456)
            /*'provider' => $provider,
            'provider_id' => $user->id*/
        ]);
    }
}
