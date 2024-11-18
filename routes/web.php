<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\RestaurantController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', function () {
    $categories = Category::all();    
    return view('categories.index', compact('categories'));
});

Route::get('/', [RestaurantController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
