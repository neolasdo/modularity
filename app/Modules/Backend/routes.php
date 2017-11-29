<?php

$namespace = 'App\Modules\Backend\Controllers';


Route::group(['module' => 'backend', 'namespace' => $namespace], function () {
    Route::get('admin', [
        'uses' => 'AdminController@login',
        'as' => 'admin.login'
    ]);
});