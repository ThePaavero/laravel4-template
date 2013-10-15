{{ View::make('includes/doctype') }}

<body class='{{ Request::segment(1) }}'>

    <div id='container'>

        <div id='page_content'>

            {{ View::make($data['page']) }}

        </div>

    </div> <!-- container -->

    {{ View::make('includes/footer') }}
</body>
</html>