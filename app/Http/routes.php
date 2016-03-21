<?php



Route::get('/', function () {

 return view('welcome');
});

Route::get('/paragraph', "LoremIpsumController@getParagraphs");
Route::post('/paragraph', "LoremIpsumController@postParagraphs");
Route::group(['middleware' => ['web']], function () {
 //
});
