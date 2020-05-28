<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {

    return response()->json(['ZZZ' => ['YYY']]);
});

Route::get('/news', function () {

    return response() -> json(\App\Newsbd::paginate(15), 200);
});


Route::get('/news/{id}', function ($id) {

    try{

        $news = \App\Newsbd::findOrFail($id);
    } catch (Exception $exception){

            return response() ->json(['Msg' => 'Такой новости не сушествует'], 404);
    }

    return response() -> json($news, 200);
});


Route::post('/news', 'ApiCRUDcont@creatup');


Route::put('/news/{id}', 'ApiCRUDcont@redactnew');

Route::delete('/news/{id}', 'ApiCRUDcont@newdelete');





















