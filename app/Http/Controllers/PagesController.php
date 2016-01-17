<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function about() {
        $today = new DateTimeZone('Australia/Brisbane');
        $age = DateTime::createFromFormat('d/m/Y', '16/11/1986', $today)
                        ->diff(new DateTime('now', $today))
                ->y;
        return view('about')->with('age', $age);
    }

    public function post_article() {
         return view('edit_pages/post_article')->with([
          'title' => 'dummy title',
          'genre' => 'dummy genre',
          'draft' => 'dummy draft'
          //Key (left side) will be the variable's name
          ]); 
    }

}
