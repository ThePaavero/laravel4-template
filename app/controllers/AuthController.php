<?php

class AuthController extends BaseController {

	public function login()
	{
		View::share('data', array(
				'page'  => 'auth.login',
				'title' => 'Login'
			));

		return View::make('maintemplate');
	}

	public function submit_login()
	{
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		if(Auth::attempt($userdata))
		{
			return Redirect::to('/');
		}
		else
		{
			return Redirect::to('/');
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function signup()
	{
		View::share('data', array(
				'page'  => 'auth.signup',
				'title' => 'Login'
			));

		return View::make('maintemplate');
	}

	public function signup_submit()
	{
		if(Input::get('password') !== Input::get('confirm_password'))
		{
			return Redirect::to('signup');
		}

		$userdata = array(
			'username' => Input::get('username'),
			'email'    => Input::get('email'),
			'password' => Hash::make(Input::get('password'))
		);

		$user = new User($userdata);
		$user->save();

		return Redirect::to('login');
	}

}