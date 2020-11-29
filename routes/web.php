<?php

//Retornando vistas
Route::get('/', 'PageController@inicio');
//------------Rutas del curso-------------\\
Route::get('fotos', 'PageController@fotos')->name('foto');
Route::get('blog', 'PageController@blog')->name('noticia');
//Parametro opcioncional::Esto no se hace va en un controlador
Route::get('nosotros/{nombre?}', 'PageController@nosotros')->name('nosotros');
