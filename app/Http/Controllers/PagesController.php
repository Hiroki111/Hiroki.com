<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about(){

        $today  = new DateTimeZone('Australia/Brisbane');
        $age = DateTime::createFromFormat('d/m/Y', '16/11/1986', $today)
            ->diff(new DateTime('now', $today))
            ->y;



        return view('about')->with('age',$age);
    }

}
