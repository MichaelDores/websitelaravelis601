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
        <div class="container">
            @include('includes.footer')
        </div>
    </footer>

</div>
</body>
</html>