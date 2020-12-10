<?php

//Retornando vistas
Route::get('/', 'PageController@inicio')->name('inicio');
Route::get('/detalle/{id}', 'PageController@detalle')->name('notas.detalle');
Route::post('/', 'PageController@crear')->name('notas.crear');
Route::get('/editar/{id}', 'PageController@editar')->name('notas.editar');
Route::put('/editar/{id}', 'PageController@update')->name('notas.update');
Route::delete('/editar/{id}', 'PageController@eliminar')->name('notas.eliminar');
//------------Rutas del curso-------------\\
Route::get('/fotos', 'PageController@fotos')->name('foto');
Route::get('/blog', 'PageController@blog')->name('noticia');
//Parametro opcioncional::Esto no se hace va en un controlador
Route::get('/nosotros/{nombre?}', 'PageController@nosotros')->name('nosotros');
