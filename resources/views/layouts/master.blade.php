<!DOCTYPE html>
<html>
<head>
    <meta name="viewpoint" content="width=device-width">
    <title>Prego - Project Managment App</title>
    <!-- TypeKit Fonts -->
    <script src="//use.typekit.net/udt8boc.js"></script>
    <script>try {TypeKit.load();}catch(e){}</script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        @include('layouts.partials.alerts')
        @yield('content')
    </div>
</body>
</html>