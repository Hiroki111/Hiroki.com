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
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li  class = has_sub><a href="#">Travel Tips</a>
                    <ul>
                        <li><a href='#'>Tip 1</a></li>
                        <li class='last'><a href='#'>Tip 2</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Links</a></li>
            </ul>
        </nav>
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
