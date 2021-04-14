<?php

use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'buildings'],
    function () {
        Route::get('/', 'BuildingsController@index');
    }
);
