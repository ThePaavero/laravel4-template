<?php namespace Astudios\Errorpage;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

class Errorpage {

	/**
	 * Show error page
	 *
	 * @param  string $string Error message text
	 * @example return Errorpage::show('Oh shit!');
	 */
	public static function show($string, $code = 500)
	{
		View::share('data', [
				'page'    => 'errorpage::page',
				'message' => $string,
				'title'   => 'Error'
			]);

		return Response::make(View::make('maintemplate'), $code);
	}

}
