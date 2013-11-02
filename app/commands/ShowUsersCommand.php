<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ShowUsersCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'showusers';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Show all users.';

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
		$users = User::all()->toArray();
		if(empty($users))
		{
			$this->info('No users found.');
			return;
		}

		$rows = [];

		foreach($users as $user)
		{
			$this->info($user['id'] . "\t" . $user['username'] . "\t Created " . $user['created_at']);
		}
	}

}