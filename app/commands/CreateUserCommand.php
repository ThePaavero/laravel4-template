<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Create user via Artisan CLI
 */
class CreateUserCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'createuser';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create new user.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$userdata = array(
			'username' => trim($this->ask('Username', 'admin')),
			'email'    => trim($this->ask('Email', 'admin@localhost')),
			'password' => Hash::make(trim($this->secret('Password')))
		);

		! empty($userdata['username']) or die($this->error('Username is required!'));
		! empty($userdata['password']) or die($this->error('Password is required!'));

		$user = new User($userdata);

		// Check that this username isn't taken
		$user->usernameExists($userdata['username']) === false or die($this->error('Username is taken!'));

		$user->save() or die($this->error('Something went wrong, sorry. Check your database settings?'));

		$this->info('User "' . $userdata['username'] . '" created with ID ' . $user->id);
	}

}