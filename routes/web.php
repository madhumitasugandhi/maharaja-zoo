<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('cache:clear', function () {
    Artisan::call('cache:clear');
    return 'd';
});

Route::get('route:clear', function () {
    Artisan::call('route:clear');
    return 'done';
});

Route::get('config:clear', function () {
    Artisan::call('config:clear');
    return 'r';
});
Route::get('optimize', function () {
    Artisan::call('optimize');
    return 'done';
});


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/service', function () {
    return view('frontend.service');
});

Route::get('/animals', function () {
    return view('frontend.animals');
});

Route::get('/education', function () {
    return view('frontend.education');
});
Route::get('/event', function () {
    return view('frontend.event');
});

Route::get('/adoption', function () {
    return view('frontend.adoption');
});

Route::get('/school', function () {
    return view('frontend.school');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
