<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/add', [ContactController::class, 'add'])->name('add-new');

Route::get('/show', [ContactController::class, 'show'])->name('show-all');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('contact/submit', function (){
    return 'Okey';
});


