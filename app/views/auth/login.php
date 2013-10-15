
<form method='post' action="<?php echo URL::to('login'); ?>">
	<label>
		Username:<br/>
		<input type='text' name='username' />
	</label>
	<br/>
	<label>
		Password:<br/>
		<input type='password' name='password' />
	</label>
	<br/>
	<input type='submit' value='Submit' />
</form>

<a href='<?php echo URL::to('signup') ?>'>Signup?</a>