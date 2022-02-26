<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Blog Laravel WPU</title>
</head>

<body class="bg-gray-50 min-h-screen">
    @include('partials.navbar')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-5 my-5">
        @yield('content')
    </div>

</body>

</html>