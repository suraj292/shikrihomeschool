<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', App\Http\Livewire\Home::class)->name('home');
Route::get('about-us', App\Http\Livewire\AboutUs::class)->name('about');
Route::get('contact-us', App\Http\Livewire\ContectUs::class)->name('contact');

Route::get('admin', \App\Http\Livewire\Admin\Login::class)->middleware('admin')->name('admin');
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>['R_admin']], function (){
    Route::get('dashboard', \App\Http\Livewire\Admin\Home::class)->name('dashboard');
});
