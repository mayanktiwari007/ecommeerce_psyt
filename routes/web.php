<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;


          // Customer route 

Route::get('/', [UserController::class, 'index']);  // Default route
Route::get('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/signup', [UserController::class, 'signup']);
Route::post('/registerUser', [UserController::class, 'registerUser']);
Route::post('/loginUser', [UserController::class, 'loginUser']);
Route::get('/marvel', [UserController::class, 'marvel']);
Route::get('/anime', [UserController::class, 'anime']);
Route::get('/dc', [UserController::class, 'dc']);
Route::get('/gaming', [UserController::class, 'gaming']);
Route::get('/series', [UserController::class, 'series']);
Route::get('/single/{id}', [UserController::class, 'singleProduct']);
Route::post('/addToCart', [UserController::class, 'addToCart']);
Route::get('/cart', [UserController::class, 'cart']);
Route::get('/deleteCartItem/{id}', [UserController::class, 'deleteCartItem']);
Route::post('/updateCart', [UserController::class, 'updateCart']);
Route::get('/checkout', [UserController::class, 'checkout']);

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::get('/profile', [UserController::class, 'profile']);
Route::post('/updateUser', [UserController::class, 'updateUser']);
Route::get('/myOrders', [UserController::class, 'myOrders']);

 // Admin route

 Route::get('/admin', [AdminController::class, 'index']);
 Route::get('/adminProducts', [AdminController::class, 'products']);
 Route::post('/AddNewProduct', [AdminController::class, 'AddNewProduct']); 
 Route::post('/UpdateProduct', [AdminController::class, 'UpdateProduct']); 
 Route::get('/deleteProduct/{id}', [AdminController::class, 'deleteProduct']);
 Route::get('/adminProfile', [AdminController::class, 'profile']);  
 Route::get('/ourCustomers', [AdminController::class, 'customers']);
 Route::get('/changeUserStatus/{status}/{id}', [AdminController::class, 'changeUserStatus']);
 Route::get('/ourOrders', [AdminController::class, 'orders']);
 Route::get('/changeOrderStatus/{status}/{id}', [AdminController::class, 'changeOrderStatus']);



