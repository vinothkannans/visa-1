<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;

class SocialiteController extends Controller
{
	
	/**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToGoogle()
    {
        return $this->redirectTo('google');
    }
	
	/**
     * Redirect the user to the Provider's authentication page.
     *
     * @return Response
     */
    public function redirectTo($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
	
	/**
     * Obtain the user information from Provider.
     *
     * @return Response
     */
    public function handleCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        return $user->getName();
    }
	
	/**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleGoogleCallback()
    {
        return $this->handleCallback('google');
    }
	
}