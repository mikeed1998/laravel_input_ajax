<?php

    use App\Http\Controllers\AJAXController;
    use App\Http\Controllers\HomeController;

    Route::get('/', 'HomeController@index')->name('index');
    Route::patch('/editarajax', 'AJAXController@editarajax');



