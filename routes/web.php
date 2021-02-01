<?php

use App\Http\Livewire\PassingComponent;
use App\Http\Livewire\ThisComponent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('passing', PassingComponent::class)->name('passing');
Route::get('this', ThisComponent::class)->name('this');
