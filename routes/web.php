<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('indexl', function () {
    return view('indexl');
});

Route::get('users', function () {
    return view('usersData');
});
Route::get('loginUsers', function () {
    return view('login');
});

Route::get('reset', function () {
    return view('ResetPassword');
});

Route::get('register', function () {
    return view('registerForm');
});

Route::get('home', function () {
    return view('home');
});
Route::get('user ', function () {
    return view('usersData');
});
Route::get('content', function () {
    return view('content');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('usersData', function () {
    return view('usersData');
});
/*  Route::post('register',[RegisterController::class,'register']);
 Route::get('users',[RegisterController::class,'fetch_student']); 
 Route::get('edit/{id}',[RegisterController::class,'edit_student']);
 Route::post('update/{id}',[RegisterController::class,'update_student']);
 Route::get('delete/{id}',[RegisterController::class,'delete_student']);
 Route::get('login',[RegisterController::class,'login']);  */

//Group Route
Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::get('users', 'fetch_student');
    Route::get('edit/{id}', 'edit_student');
    Route::post('update/{id}', 'update_student');
    Route::get('delete/{id}', 'delete_student');
    Route::get('login', 'login');
});
