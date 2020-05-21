<?php

namespace App\Http\Controllers;
use\App\Newsbd;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
      //  $newsbd = Newsbd::all();
        $newsbd = Newsbd::paginate(5);
    return view('index', ['newsbd' => $newsbd]);
    }
}
