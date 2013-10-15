<?php

class HomeController extends BaseController {

	public function index()
	{
		View::share('data', array(
				'page'  => 'pages.home',
				'title' => 'Home'
			));

		return View::make('maintemplate');
	}

}