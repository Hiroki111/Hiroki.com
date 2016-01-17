<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('css/post_article.css')}}" rel="stylesheet">
    </head>

    <body>
        <header>Post new articles</header>
        <div id = draft>
            <form action= {{url('post_article')}} name="show_result" method="POST">
                <p>Title</p>
                <textarea name ="title" style = "width:100%;"></textarea>
                <p>Genre</p>
                <select name="genre" multiple="multiple">
                    <option>Traveling</option>
                    <option>Language learning</option>
                    <option>Job hunting</option>
                </select>
                <p>Draft</p>
                <textarea name ="draft_text" style="width:100%; height:400px;"></textarea>
                <br><br>
                <input type="submit" value="Show Result" name="show_result" />
                <input type = "submit" value = "Publish" name = "publish" />
            </form>
        </div>
        <div id = result>
            <p>Result </p>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               echo '<h1>'. $_POST['title'].'</h1>';
               echo '<h3>'.$_POST['genre'].'</h3>';
               echo '<p>'.$_POST['draft_text'].'</p>';
            }
            ?>
                        
        </div>
        <footer></footer>
    </body>

</html>