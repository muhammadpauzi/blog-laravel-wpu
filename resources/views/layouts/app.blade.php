<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Blog Laravel WPU</title>

    <!-- trix-editor -->
    <link rel="stylesheet" type="text/css" href="{{ asset('trix-editor/trix.css') }}">
    <style>
        span[data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    @include('partials.navbar')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-5 my-5">
        @yield('content')
    </div>

    <!-- trix-editor -->
    <script type="text/javascript" src="{{ asset('trix-editor/trix.js') }}"></script>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
</body>

</html>