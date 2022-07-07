<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::get('/',[Homecontroller::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[Homecontroller::class,'redirect'])->middleware('auth','verified');

route::get('/View_catagory',[Admincontroller::class,'View_catagory']);

route::POST('/add_catagory',[Admincontroller::class,'add_catagory']);

route::get('/delete_catagory/{id}',[Admincontroller::class,'delete_catagory']);


route::get('/view_product',[Admincontroller::class,'view_product']);


route::POST('/add_product',[Admincontroller::class,'add_product']);

route::get('/show_product',[Admincontroller::class,'show_product']);

route::get('/delete_product/{id}',[Admincontroller::class,'delete_product']);

route::get('/update_product/{id}',[Admincontroller::class,'update_product']);

route::POST('/update_product_confirm/{id}',[Admincontroller::class,'update_product_confirm']);

route::get('/product_details/{id}',[Homecontroller::class,'product_details']);

route::POST('/add_cart/{id}',[Homecontroller::class,'add_cart']);

route::get('/show_cart',[Homecontroller::class,'show_cart']);

route::get('/remove_cart/{id}',[Homecontroller::class,'remove_cart']);

route::get('/cash_order',[Homecontroller::class,'cash_order']);

route::get('/stripe/{totalprice}',[Homecontroller::class,'stripe']);

route::POST('stripe/{totalprice}', [Homecontroller::class,'stripePost'])->name('stripe.post');

route::get('/order',[Admincontroller::class,'order']);

route::get('/delivered/{id}',[Admincontroller::class,'delivered']);

route::get('/print_pdf/{id}',[Admincontroller::class,'print_pdf']);

route::get('/send_email/{id}',[Admincontroller::class,'send_email']);

route::POST('/send_user_email/{id}',[Admincontroller::class,'send_user_email']);

route::get('/search',[Admincontroller::class,'searchdata']);

route::get('/contact',[Homecontroller::class,'contact']);

route::get('/aboutus',[Homecontroller::class,'aboutus']);

route::get('/productsive',[Homecontroller::class,'productsive']);

route::get('/redirec',[Homecontroller::class,'redirec'])->middleware('auth','verified');

route::get('/show_order',[Homecontroller::class,'show_order']);

route::get('/cancel_order/{id}',[Homecontroller::class,'cancel_order']);