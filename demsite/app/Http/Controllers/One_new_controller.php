<?php

namespace App\Http\Controllers;

use App\Newsbd;
use Illuminate\Http\Request;

class One_new_controller extends Controller
{

    public function __invoke($id)
    {
        $newsbd = Newsbd::where('id', '=', $id)->first();
        return view('one_new',['newsbd'=>$newsbd]);
    }

}
