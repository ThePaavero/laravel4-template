{{ View::make('includes/doctype') }}

<body class='{{ Request::segment(1) }}'>

	<div id='alerts'>
		@foreach(Alert::getMessages() as $type => $alerts)
			<div class='{{ $type }}'>
				@foreach($alerts as $alert)
					<div class='alert'>
						{{ $alert }}
					</div><!-- alert -->
				@endforeach
			</div><!-- {{ $type }} -->
		@endforeach
	</div><!-- alerts -->

    <div id='container'>

        <div id='page_content'>

            {{ View::make($data['page']) }}

        </div>

    </div> <!-- container -->

    {{ View::make('includes/footer') }}
</body>
</html>