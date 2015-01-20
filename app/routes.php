<?php

Route::pattern('index','index\.html');
Route::pattern('postName', '[0-9a-zA-Z_]+');

//index
Route::get('/',array('as'=>'index','uses'=>'HomeController@showIndex'));
Route::get('/{index?}',array('as'=>'index','uses'=>'HomeController@showIndex'));

//bieming
Route::get('/{postName}',array('uses'=>'HomeController@showPost'));
