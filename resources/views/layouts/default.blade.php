<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row text-center">

        @yield('content')

    </div>

    <footer class="container-fluid bg-dark text-white text-center">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>