<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="w-100 flex p-6 bg-white justify-between">
        <div>
            <a href="{{route('home')}}">Real Estate</a>
        </div>
        <div>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Register</a>
        </div>
    </header>
 @yield('content')
</body>
</html>
