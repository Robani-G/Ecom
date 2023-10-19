<?php

use App\Livewire\Products\Checkout;
use App\Livewire\Products\SingleList;
use Illuminate\Support\Facades\Route;
use App\Livewire\Products\ShowProduct;
use App\Livewire\Products\CartComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/cart', CartComponent::class) ->name('shop.cart');
Route::get('/checkout', Checkout::class)->name('checkout') ;
Route::get('/single-list/{$id}', SingleList::class) ->name('single-list');



Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
