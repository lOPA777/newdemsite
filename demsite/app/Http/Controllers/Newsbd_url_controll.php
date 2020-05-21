<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class Newsbd_url_controll extends Controller
{
    public function __invoke($key)
    {
      $author = Author::where('key', '=', $key) ->first();  // ишем в таблице автора под key и когда нашел ->first(); закончить искать
        return view('new_url_author', ['author' =>$author]);
    }
}
