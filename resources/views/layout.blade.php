<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>GVallejos</title>
</head>
<body>
    <div id="sidebar">
        <data-the-side-bar url='{{ Request::url() }}' />
    </div>
    <div id="app">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>