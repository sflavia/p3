<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'MainController@getmain');
	Route::get('/user', 'UserController@getuser');
	Route::post('/user', 'UserController@postuser');
	Route::get('/loremText', 'LoremIpController@getParagraphs');
	Route::post('/loremText', 'LoremIpController@postParagraphs');
});
