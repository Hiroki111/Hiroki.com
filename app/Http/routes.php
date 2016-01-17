<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', 'PagesController@about');

Route::get('/post_article', 'PagesController@post_article');

Route::post('/post_article',  function () {
    return view('edit_pages/post_article');
});

Route::get('/insert', function() {
    App\Category::create(array('name' => 'Music'));
    return 'category added';
});

Route::get('/insert', function() {
    App\Category::create(array('title' => 'HIROKI'));
    return 'category added';
});

Route::get('/read', function() {
    $category = new App\Category();
    
    $data = $category->all(array('title','id'));

    foreach ($data as $list) {
        echo $list->id . ' ' . $list->title . ' ';
    }
});

Route::get('/update', function() {
    $category = App\Category::find(1);
    $category->title = 'HEAVY METAL';
    $category->save();
    
    $data = $category->all(array('title','id'));

    foreach ($data as $list) {
        echo $list->id . ' ' . $list->title . '
';
    }
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

?>