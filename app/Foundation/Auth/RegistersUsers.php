<?php

namespace App\Foundation\Auth;

use Illuminate\Foundation\Auth\RegistersUsers as Registers;
use Illuminate\Http\Request;

trait RegistersUsers
{
	use Registers;
	
	/**
     * Show the application join form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showJoinForm()
    {
        return view('auth.join');
    }
	
	/**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function join(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->guard()->login($this->create($request->all()));
        return redirect($this->redirectPath());
    }
}