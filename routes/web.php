<?php

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
use App\Http\Controllers\CartController;
use App\Http\Controllers\MedicineController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/map', function () {
    return view('map');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});


Route::resource('/pets', 'PetController')->middleware('can:manage-pets');

Route::resource('/history', 'ClinicalHistoryController')->middleware('can:manage-pets');

Route::resource('/medicines', 'MedicineController')->middleware('can:manage-medicines');

Route::resource('/veterinary', 'VeterinaryController')->middleware('can:edit-users');

Route::resource('/medicine_detail', 'MedicineDetailController');

Route::resource('/attention', 'AttentionController');

Route::resource('/diagnoses', 'DiagnosesController');

Route::get('/shop', [CartController::class, 'shop'])->name('shop')->middleware('can:edit-pets');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index')->middleware('can:edit-pets');
Route::post('/add', [CartController::class, 'add'])->name('cart.store')->middleware('can:edit-pets');
Route::post('/update', [CartController::class, 'update'])->name('cart.update')->middleware('can:edit-pets');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove')->middleware('can:edit-pets');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear')->middleware('can:edit-pets');
