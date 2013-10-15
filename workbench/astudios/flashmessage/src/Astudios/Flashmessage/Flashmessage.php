<?php namespace Astudios\Flashmessage;

class Flashmessage {

	private static $session_key = 'AstudiosFlashmessage';

	public static function set($msg, $mood = ':|')
	{
		$mood_strings = [
			':)' => 'positive',
			':|' => 'neutral',
			':(' => 'negative',
		];

		if( ! isset($_SESSION[self::$session_key]))
		{
			$_SESSION[self::$session_key] = [];
		}

		array_push($_SESSION[self::$session_key], [
				'message' => $msg,
				'mood'    => isset($mood_strings[$mood]) ? $mood_strings[$mood] : 'neutral'
			]);
	}

	public static function getMessages()
	{
		return isset($_SESSION[self::$session_key]) ? $_SESSION[self::$session_key] : [];
	}

	public static function emptyMessages()
	{
		if( ! isset($_SESSION[self::$session_key]))
		{
			return false;
		}

		unset($_SESSION[self::$session_key]);
		return true;
	}

	public static function printMessages()
	{
		$messages = self::getMessages();
		self::emptyMessages();

		if(empty($messages))
		{
			return false;
		}

		$markup = '';

		foreach($messages as $i)
		{
			$message = $i['message'];
			$mood    = $i['mood'];

			$markup .= '<li class="flashmessage mood_' . $mood . '">
				<p>' . $message . '</p>
			</li>';
		}

		echo $markup;
	}

}