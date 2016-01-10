<html>
    <head>
        <title>@yield('Hiroki.com')</title>
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        
    </head>
    <body>
    <header>
        <div id = header_image>
            <h1 id = header_title>Hiroki.com</h1>
        </div>
        <div id = header_submenu>
            <ul id = submenu>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Links</a></li>
            </ul>
        </div>
    </header>
   <div class = sidebar>
        <ul id = sidebar_genre>
            <li><a href="#">Genre</a></li>
        </ul>
       <ul id = sidebar_popular>
           <li><a href="#">Popular Articles</a></li>
       </ul>
       <ul id = sidebar_link>
           <li><a href="#">Links</a></li>
       </ul>
   </div>
    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Hiroki.com - Established in 2016</p>
    </footer>
    </body>
</html>
