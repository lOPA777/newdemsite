<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCRUDcont extends Controller
{
    public function creatup(Request $request){
        $news = new \App\Newsbd();
        $news -> author_id = $request -> post('author_id');
        $news -> title = $request -> post('title');
        $news -> bodytext = $request->post('bodytext');
        $news -> img = $request->post('img');
        $news -> save();
        return response() -> json($news, 201);
    }

    public function redactnew(Request $request, $id){
        $news = \App\Newsbd::find($id);
        $news -> author_id = $request -> post('author_id');
        $news -> title = $request -> post('title');
        $news -> bodytext = $request->post('bodytext');
        $news -> img = $request->post('img');
        $news -> save();
        return response() -> json($news, 200);

    }

    public function newdelete($id)
    {
        $newsq = \App\Newsbd::find($id);
        $newsq->delete();
        return response()->json(['msg' => $newsq->id . ' Новость удалена'], 200);
    }

}
