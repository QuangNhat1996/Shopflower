<?php

use App\Http\Controllers\ControllerFlower;
use App\Admin\Controllers\UsersController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\orderConfirmController;



use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
// Route::get('/', [ControllerFlower::class, 'index']);
Route::get('/', [ControllerFlower::class, 'product']);

// BLOG
Route::get('blog', [ControllerFlower::class, 'blog']);
Route::get('blogdetail/{name}', [ControllerFlower::class, 'blogdetail']);
Route::get('contact', [ControllerFlower::class, 'contact']);

// LOG IN
Route::get('login', [ControllerFlower::class, 'login']);
Route::get('/logout', [ControllerFlower::class, 'customLogout'])->name('logout');
Route::get('/forgot-password', [ControllerFlower::class, 'forgotPassword']);
Route::get('/reset-password', [ControllerFlower::class, 'resetPassword']);
Route::post('/createacc', [ControllerFlower::class, 'checkRegister']);
Route::post('/checklogin', [ControllerFlower::class, 'checkLogin']);
Route::post('/checkforgot', [ControllerFlower::class, 'checkForgotPassWord']);
Route::post('/postResetPass', [ControllerFlower::class, 'checkResetPassword']);

// CATEGORY
Route::get('view-categories/{category_id}', [ControllerFlower::class, 'viewcategories'])->name('viewCategories');;


// PRODUCT
Route::get('/search_product', [ControllerFlower::class, 'search_product'])->name('search_product');
Route::get('/search_productindex', [ControllerFlower::class, 'search_productindex'])->name('search_productindex');
Route::get('detail/{product_id}', [ControllerFlower::class, 'detail']);

//feedback
Route::get('feedback', [ControllerFlower::class, 'view_user_feedback']);
Route::post('feedback', [ControllerFlower::class, 'feedback_store']);
// Route::get('delete/{id}', [ControllerFlower::class, 'deletfb']);


//Cardinfo
Route::get('cartinfo', [ControllerFlower::class, 'cardinfo'])->name('cartinfo');
Route::get('cart/delete/{id}', [ControllerFlower::class, 'delete']);


// CART

Route::get('cart', [ControllerFlower::class, 'card']);

Route::patch('update-cart', [ControllerFlower::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ControllerFlower::class, 'remove'])->name('remove_from_cart');
// Route::post('checkout', [ControllerFlower::class, 'session']);


// STRIPE
Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
// Route::patch('/update-cart', [StripeController::class, 'updateCart'])->name('update_cart');
Route::get('/payment_cart', [StripeController::class, 'payment_cart'])->name('payment_cart');

Route::prefix('/user')->name('user')->middleware('checklogin')->group(function(){
    Route::get('cart/{product_id}', [ControllerFlower::class, 'addToCart']);
    Route::get('/bill',[ControllerFlower::class , 'bill']);
    // Route::post('feedback', [ControllerFlower::class, 'feedback_store']);
});

// Order Confirmation
Route::get('/order-confirm', [orderConfirmController::class, 'orderBill']);
// Route::get('/order-confirm', [orderConfirmController::class, 'orderConfirm']);


