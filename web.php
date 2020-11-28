<?php

use Gondr\Route;

Route::get("/" , "PageController@main");
Route::get("board" , "PageController@board");
Route::get("board/mod" , "PageController@mod");
Route::get("board/write" , "PageController@write");
Route::get("board/view" , "PageController@view");
Route::get("user/register" , "PageController@register");
Route::get("user/login" , "PageController@login");