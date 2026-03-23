<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CoachController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('register');
})->name('logout');

Route::get('/coach/{id}', [CoachController::class, 'showCoach'])->name('showCoach');

Route::get('/addRegister', [RegisterController::class, 'add'])->name('addRegister');

Route::post('/addRegister/store', [RegisterController::class, 'store'])->name('storeRegister');

Route::post('/addRegister', [RegisterController::class, 'store'])->name('addRegister');

Route::get('/showRegister', [RegisterController::class, 'show'])->name('showRegister');

Route::get('/register/items', [App\Http\Controllers\RegisterController::class, 'item'])->name('itemRegister');

Route::get('/register/fetchItems', [RegisterController::class, 'fetchItems'])->name('fetchItemsRegister');

Route::get('/editRegister/{id}', [App\Http\Controllers\RegisterController::class, 'edit'])->name('editRegister');

Route::post('/updateRegister', [App\Http\Controllers\RegisterController::class, 'update'])->name('updateRegister');

Route::get('/deleteRegister/{id}', [App\Http\Controllers\RegisterController::class, 'delete'])->name('deleteRegister');

Route::delete('/deleteRegister/{id}', [RegisterController::class, 'delete'])->name('deleteRegister');

Route::get('/register/detail/{id}', [RegisterController::class, 'detail'])->name('detailRegister');

Route::get('/search', [RegisterController::class, 'search'])->name('searchRegister');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
