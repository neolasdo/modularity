<?php

use \Illuminate\Support\Facades\Route;


Route::get('admin', [
    'uses' => 'App\Modules\Backend\Controllers\MainController\index',
    'as' => 'backend.index'
]);