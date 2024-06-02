<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/auth/about', 'AboutController@index');
    // 關於我們 創建
    $router->get('/auth/about/create', 'AboutController@create');
    // 關於我們 儲存
    $router->post('/auth/about', 'AboutController@store');

});
