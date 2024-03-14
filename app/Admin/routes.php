<?php

use Illuminate\Support\Facades\Route;
// use OpenAdmin\Admin\Admin;
use Illuminate\Routing\Router;
use App\Admin\Controllers\BlogsController;
use App\Admin\Controllers\OrdersController;
use App\Admin\Controllers\CategoriesController;
use App\Admin\Controllers\ProductFlowerController;
use App\Admin\Controllers\TbusersController;
// use App\Admin\Controllers\CartController;
// use App\Admin\Controllers\TbcartController;
// use App\Admin\Controllers\FathercartController;
use App\Admin\Controllers\CartController;
use App\Admin\Controllers\cartDetailController;
use App\Admin\Controllers\FormfeedbackController;

use OpenAdmin\Admin\Facades\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    // $router->resource('blogs', BlogController::class);
    $router->resource('blogs', BlogsController::class);
    // $router->resource('categories', CategoryController::class);
    // $router->resource('orders', OrdersController::class);
    $router->resource('categories', CategoriesController::class);
    $router->resource('products', ProductFlowerController::class);
    // $router->resource('order-details', OrderDetailController::class);
    $router->resource('tbusers', TbusersController::class);
    // $router->resource('carts', CartController::class);
    // $router->resource('tb-carts', TbcartController::class);
    // $router->resource('father-carts', FathercartController::class);
    $router->resource('carts', CartController::class);
    $router->resource('cart-details', cartDetailController::class);
    $router->resource('formfeeds', FormfeedbackController::class);

});
