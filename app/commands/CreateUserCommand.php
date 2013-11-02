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
			'username' => trim($this->ask('Username')),
			'email'    => trim($this->ask('Email')),
			'password' => Hash::make(trim($this->secret('Password')))
		);

		$user = new User($userdata);
		$id = $user->save();

		$this->info('User "' . $userdata['username'] . '" created with ID ' . $id);
	}

}