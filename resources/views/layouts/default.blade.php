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
    <footer class="footer">
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
                    margin-top: 20px;
                }
            </style>
        </div>
    </footer>
</div>
</body>
</html>