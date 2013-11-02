<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DeleteUserCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'deleteuser';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Delete user.';

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
		$username = $this->ask('Username');

		! empty($username) or die($this->error('Username is required!'));

		$user = new User();
		$user->usernameExists($username) or die($this->error('Could not find user!'));
		User::where('username', $username)->delete();
		$this->info('User deleted.');
	}

}