<?php
Route::get('notes/index', 'NoteController@index')->name('notes.index');
Route::get('notes/create', 'NoteController@create')->name('notes.create');
Route::post('notes', 'NoteController@store')->name('notes.store');

