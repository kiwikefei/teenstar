<?php

Route::get('/register', function(){
  return "registration not allowed";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
