<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
        @include('includes.header')
    <main role = main>
        @yield('content')
    </main>
    <footer class="row">
        <div class="container">
            @include('includes.footer')
            <style>
                footer {
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: darkBlue;
                    color: white;
                    text-align: center;
                    margin-left: auto;
                    margin-right: auto;
                }
            </style>
        </div>
    </footer>
</div>
</body>
</html>