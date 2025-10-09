<?php




Route::get('/todo', 'TodoController@index');
Route::get('/todo/create', 'TodoController@create')->name('todo.create');
Route::post('/todo', 'TodoController@store')->name('todo.store');
Route::get('/todo', 'TodoController@index')->name('todo.index');

// Route::get　　条件getかpostか
// '/todo', 'TodoController@index')->name('todo.index');
// '/末尾のurl','ファイル名＠メソッド'