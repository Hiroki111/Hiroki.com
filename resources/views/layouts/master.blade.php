<html>
    <head>
       <title>@yield('Hiroki.com')</title>
    </head>
    <body>
    <header>
        <div class = header_logo>
            <h2>Hiroki.com</h2>
        </div>
        <div class = header_submenu>
            <ul = submenu>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Links</a></li>
            </ul>
        </div>

    </header>

        @section('sidebar')
            This is the master sidebar.
        @show

    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
