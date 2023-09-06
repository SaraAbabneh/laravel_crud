<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\updateController;
use App\Http\Controllers\CreateController;


use App\Http\Controllers\DisplayController;
use App\Http\Controllers\DeleteController;


Route::get('/display', function () {
    return view('display');
})->name('display');

Route::get('/update/{id}', [updateController::class, 'getupdate'])->name('Update');
Route::post('/update/{id}', [updateController::class, 'updateData'])->name('update');


// Define a GET route for showing the form
Route::get('/create', [CreateController::class, 'create'])->name('create');

// Define a POST route for handling the form submission
Route::post('/create', [CreateController::class, 'store']);
Route::get('/index', [CreateController::class, 'index'])->name('index');

Route::get('/', [DisplayController::class, 'index']);

Route::get('/delete/{id}', [DeleteController::class, 'delete'])->name('delete');


Route::get('/display', [DisplayController::class, 'index'])->name('display');
