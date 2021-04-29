<?php

use Illuminate\Support\Facades\Route;

$namespace = 'App\Modules\Backend\User\Controllers';

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'user', 'module' => 'User', 'namespace' => $namespace], function () {});
