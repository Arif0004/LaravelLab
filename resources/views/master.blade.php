<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo right">USS</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="{{url('/forgetPass')}}">fAbout</a></li>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/TODO')}}">Todo</a></li>
        </ul>
    </div>
</nav>
@yield('Content')

</body>

</html>
