<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('css/post_article.css')}}" rel="stylesheet">
    </head>

    <body>
        <header>Post new articles</header>
        <div id = content>
            <p>Title</p>
            <textarea style = "width:100%;"></textarea>
            <p>content</p>
            <textarea style="width:100%; height:400px;"></textarea>
        </div>
        <div id = result>
            <p>result</p>
        </div>
        <footer>see the result</footer>
    </body>

</html>