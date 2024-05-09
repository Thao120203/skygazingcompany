<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\LoginCusController;
use App\Http\Controllers\Admin\AstronomicalController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\SolarSystemController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ObservatoryController;
use App\Http\Controllers\Admin\ConstellationController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CometController;
use App\Http\Controllers\Client\InfoController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ForgetPassword;
use App\Http\Controllers\CLient\BuyticketController;
use App\Http\Controllers\Admin\CartController;
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

//Client base
Route::get('/',[ClientController::class,'home'])->name('home');
Route::get('home',[ClientController::class,'home'])->name('home');
Route::get('about',[ClientController::class,'about'])->name('about');
Route::get('contact',[ClientController::class,'contact'])->middleware('logincus')->name('contact');
Route::post('contact',[ClientController::class,'storecontact'])->name('storecontact');
Route::get('history/{id}',[ClientController::class,'history'])->name('history');
//! Client base


//Data client

    //Infomation Ae
Route::get('ss/{id}',[InfoController::class,'ss'])->name('ss')->middleware('logincus')->where('id', '[0-9]+');
Route::get('constellation/{id}',[InfoController::class,'constellation'])->middleware('logincus')->name('constellation')->where('id', '[0-9]+');
Route::get('news/{id}',[InfoController::class,'news'])->name('news')->middleware('logincus')->where('id', '[0-9]+');
Route::get('observatory/{id}',[InfoController::class,'observatory'])->middleware('logincus')->name('observatory')->where('id', '[0-9]+');
Route::get('cm',[InfoController::class,'cm'])->middleware('logincus')->name('Comet');
    //!Infomation Ae

    //List data
Route::get('solarsystem',[InfoController::class,'solarsystem'])->name('Solar System');
Route::get('ob',[InfoController::class,'ob'])->name('Observatory');
Route::get('nw',[InfoController::class,'nw'])->name('News');
Route::get('lc',[InfoController::class,'lc'])->name('Constellation');
    //! List data
 //! Data client

//Login Customer
Route::get('login',[LoginCusController::class,'getUserLogin'])->name('getUserLogin');
Route::post('login',[LoginCusController::class,'postUserLogin'])->name('postUserLogin');
Route::get('logout',[LoginCusController::class,'Userlogout'])->name('Userlogout');
//!Login Customer

//Register Customer
Route::get('register',[RegisterController::class,'getUserRegister'])->name('getRegister');
Route::post('register',[RegisterController::class,'postUserRegister'])->name('postRegister');
//! Register Customer


Route::prefix('admin')->middleware('login','level')->name('admin.')->group(function (){
    Route::prefix('member')->name('member.')->group(function (){
        //List Member
        Route::get('index',[MemberController::class,'index'])->name('index');
        Route::get('/',[MemberController::class,'index'])->name('index');
        //Create Member
        Route::get('create',[MemberController::class,'create'])->name('create');
        Route::post('store',[MemberController::class,'store'])->name('store');
        //Delete memeber
        Route::get('delete/{id}',[MemberController::class,'delete'])->name('delete');
        //Edit member
        Route::get('edit/{id}',[MemberController::class,'edit'])->name('edit');
        Route::post('update/{id}',[MemberController::class,'update'])->name('update');
    });

    Route::prefix('astronomicalentity')->name('astronomicalentity.')->group(function (){
        //List AE
        Route::get('/',[AstronomicalController::class,'index'])->name('index');
        Route::get('index',[AstronomicalController::class,'index'])->name('index');
        //Created AE
        Route::get('create',[AstronomicalController::class,'create'])->name('create');
        Route::post('store',[AstronomicalController::class,'store'])->name('store');
        //Updated AE
        Route::get('edit/{id}',[AstronomicalController::class,'edit'])->name('edit');
        Route::post('update/{id}',[AstronomicalController::class,'update'])->name('update');
        //Delete AE
        Route::get('delete/{id}',[AstronomicalController::class,'delete'])->name('delete');
    });

    //Observatory
    Route::prefix('observatory')->name('observatory.')->group(function (){
        //List Observatory
        Route::get('/',[ObservatoryController::class,'index'])->name('index');
        Route::get('index',[ObservatoryController::class,'index'])->name('index');
        //Create Observatory
        Route::get('create',[ObservatoryController::class,'create'])->name('create');
        Route::post('store',[ObservatoryController::class,'store'])->name('store');
        //Delete Observatory
        Route::get('delete/{id}',[ObservatoryController::class,'delete'])->name('delete');
        //Edit Observatory
        Route::get('edit/{id}',[ObservatoryController::class,'edit'])->name('edit');
        Route::post('update/{id}',[ObservatoryController::class,'update'])->name('update');
    });

    //Constellation
    Route::prefix('constellation')->name('constellation.')->group(function (){
        //List Constellation
        Route::get('/',[ConstellationController::class,'index'])->name('index');
        Route::get('index',[ConstellationController::class,'index'])->name('index');
        //Create Constellation
        Route::get('create',[ConstellationController::class,'create'])->name('create');
        Route::post('store',[ConstellationController::class,'store'])->name('store');
        //Delete Constellation
        Route::get('delete/{id}',[ConstellationController::class,'delete'])->name('delete');
        //Edit Constellation
        Route::get('edit/{id}',[ConstellationController::class,'edit'])->name('edit');
        Route::post('update/{id}',[ConstellationController::class,'update'])->name('update');
    });



    Route::prefix('ss')->name('ss.')->group(function () {
        Route::get('/', [SolarSystemController::class, 'index'])->name('index');
        Route::get('index', [SolarSystemController::class, 'index'])->name('index');
        Route::get('delete/{id}', [SolarSystemController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
        Route::get('create', [SolarSystemController::class, 'create'])->name('create');
        Route::post('store', [SolarSystemController::class, 'store'])->name('store');
        Route::get('edit/{id}', [SolarSystemController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [SolarSystemController::class, 'update'])->name('update')->where('id', '[0-9]+');
    });

    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('index', [NewsController::class, 'index'])->name('index');
        Route::get('delete/{id}', [NewsController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
        Route::get('create', [NewsController::class, 'create'])->name('create');
        Route::post('store', [NewsController::class, 'store'])->name('store');
        Route::get('edit/{id}', [NewsController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [NewsController::class, 'update'])->name('update')->where('id', '[0-9]+');
    });

    //Comet
    Route::prefix('comet')->name('comet.')->group(function (){
        //List Comet
        Route::get('/',[CometController::class,'index'])->name('index');
        Route::get('index',[CometController::class,'index'])->name('index');
        //Create Comet
        Route::get('create',[CometController::class,'create'])->name('create');
        Route::post('store',[CometController::class,'store'])->name('store');
        //Delete Comet
        Route::get('delete/{id}',[CometController::class,'delete'])->name('delete')->where('id', '[0-9]+');
        //Edit Comet
        Route::get('edit/{id}',[CometController::class,'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}',[CometController::class,'update'])->name('update')->where('id', '[0-9]+');
    });

    //Contact
    Route::prefix('contact')->name('contact.')->group(function (){
        Route::get('/',[ContactController::class,'index'])->name('index');
        Route::get('index',[ContactController::class,'index'])->name('index');
        Route::get('delete/{id}',[ContactController::class,'delete'])->name('delete')->where('id', '[0-9]+');
    });
    //Cart
    Route::prefix('cart')->name('cart.')->group(function (){
        Route::get('/',[CartController::class,'index'])->name('index');
        Route::get('index',[CartController::class,'index'])->name('index');
        Route::get('delete/{id}',[CartController::class,'delete'])->name('delete')->where('id', '[0-9]+');
        Route::get('edit/{id}',[CartController::class,'edit'])->name('edit')->where('id', '[0-9]+');;
        Route::post('update/{id}',[CartController::class,'update'])->name('update')->where('id', '[0-9]+');;
    });
});

Route::prefix('admin')->name('admin.')->group(function (){

    Route::get('login',[LoginController::class,'getLogin'])->name('getLogin');
    Route::post('login',[LoginController::class,'postLogin'])->name('postLogin');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');

    Route::prefix('cart')->name('cart.')->group(function (){
        Route::post('store', [CartController::class, 'store'])->name('store');
    });
});

Route::get('forget-password', [ForgetPassword::class, 'forget_pass'])->name('forget_pass');
Route::post('recover-pass', [ForgetPassword::class,'recoverPass'])->name('recoverPass');
Route::get('fill-confirm-code', [ForgetPassword::class,'fillConfirmCodeView'])->name('fillConfirmCodeView');
Route::post('fill-confirm-code', [ForgetPassword::class,'fillConfirmCode'])->name('fillConfirmCode');
Route::get('fill-new-password/{id}', [ForgetPassword::class,'fillNewPasswordView'])->name('fillNewPasswordView');
Route::post('fill-new-password/{id}', [ForgetPassword::class,'fillNewPassword'])->name('fillNewPassword');

Route::get('buyticket',[BuyticketController::class,'getBuyTicket'])->middleware('logincus')->name('buyticket');
Route::get('payment/{id}',[CartController::class,'payment'])->middleware('logincus')->name('payment');
Route::get('complete/{code}',[CartController::class,'complete'])->middleware('logincus')->name('complete');

Route::get('deleteComplete/{id}',[CartController::class,'deleteComplete'])->middleware('logincus')->name('deleteComplete');

