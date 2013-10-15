
<form method='post' action="<?php echo URL::to('signup'); ?>">
	<label>
		Username:<br/>
		<input type='text' name='username' />
	</label>
	<br/>
	<label>
		Email:<br/>
		<input type='text' name='email' />
	</label>
	<br/>
	<label>
		Password:<br/>
		<input type='password' name='password' />
	</label>
	<br/>
	<label>
		Password:<br/>
		<input type='password' name='confirm_password' />
	</label>
	<br/>
	<input type='submit' value='Submit' />
</form>