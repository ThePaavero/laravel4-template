
<h1>Error</h1>

<p class='error_message'>

	{{ $data['message'] }}

</p><!-- error_message -->

<p>
	<nav>
		<ul>
			@if (isset($_SERVER['HTTP_REFERER']))
				<li><a href='{{ $_SERVER['HTTP_REFERER'] }}'>Go back</a></li>
			@endif
			<li><a href='{{ URL::to('') }}'>Home page</a></li>
		</ul>
	</nav>

</p>
