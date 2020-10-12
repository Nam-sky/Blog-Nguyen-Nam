<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/source/css/style.css">
    <link rel="stylesheet" href="public/source/css/bootstrap.min.css">
    <script src="public/source/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!-- Font Anwesome -->
    <script src="https://kit.fontawesome.com/fe9872fc12.js" crossorigin="anonymous"></script>
    
    <title>@yield('title')</title>
</head>
<body class="main-blog">
    <header>
    <div class="menu-top">
        @include('fron-end.header')
    </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer class="bg bg-white">
        @include('fron-end.footer')
    </footer>
</body>
</html>