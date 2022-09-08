<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Spatie\Permission\Contracts\Role;

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

// Route::get('admin', function(){
//     return 'Hi Admin';
// })->middleware('role:admin');

// Route::get('user', function(){
//     return 'Hi User';
// })->middleware('role:user');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::redirect('/', 'prototype/login');
Route::redirect('/', '/prototype/login');

Route::get('/dashboard', function () {
    return Inertia::render('Welcome');
});
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('prototype')->group(function () {
    route::get('/login', function(){
        return Inertia::render('Prototype/Login');
    });
});

require __DIR__.'/auth.php';
