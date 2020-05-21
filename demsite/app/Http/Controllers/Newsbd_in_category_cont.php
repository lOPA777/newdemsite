<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class Newsbd_in_category_cont extends Controller
{
    public function __invoke($key)
    {
       $category = Category::where('key', '=', $key) ->first();
       return view('new_in_category', ['category' => $category]);
    }
}
