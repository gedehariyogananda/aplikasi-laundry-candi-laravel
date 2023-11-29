<?php

use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\SpesificationController;
use App\Http\Controllers\UserPurchasedController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/data-customer/entry-data', [UserPurchasedController::class, 'index'])->name('purchased.index');
Route::get('/data-customer/entry-data/create', [UserPurchasedController::class, 'create'])->name('purchased.create');
Route::get('/data-customer/entry-data/created', [UserPurchasedController::class, 'created'])->name('purchased.get');
Route::post('/data-customer/entry-data/create', [UserPurchasedController::class, 'store'])->name('purchased.store');
Route::get('/data-customer/entry-data/pemesanan', [UserPurchasedController::class, 'edit'])->name('purchased.edit');
Route::patch('/data-customer/entry-data/edit', [UserPurchasedController::class, 'update'])->name('purchased.update');
Route::patch('/data-customer/entry-data/delete-pemesanan/{id}', [UserPurchasedController::class, 'destroyPemesanan'])->name('purchased.destroyPemesanan');


Route::get('/checkout-customer', [PaymentMethodController::class, 'index'])->name('checkout.index');
Route::patch('/checkout-customer/update/{id}', [PaymentMethodController::class, 'update'])->name('checkout.update');
Route::get('/nota-customer/{id}',[UserPurchasedController::class, 'nota'])->name('nota.index');
Route::delete('/pemesanan/{id}/delete',[UserPurchasedController::class, 'destroy'])->name('nota.delete');