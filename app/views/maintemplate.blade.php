{{ View::make('includes/doctype') }}

<body class='{{ Request::segment(1) }}'>

	{{ View::make('includes/alerts') }}

    <div id='container'>

    	{{ View::make('includes/header') }}

        <div id='page_content'>

            {{ View::make($data['page']) }}

        </div>

    </div> <!-- container -->

    {{ View::make('includes/footer') }}

</body>
</html>