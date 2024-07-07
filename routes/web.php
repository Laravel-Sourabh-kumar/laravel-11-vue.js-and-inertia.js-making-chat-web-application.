<?php

use App\Http\Controllers\ChatShowController;
use App\Http\Controllers\SendMessageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// })->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard');
    // })->name('dashboard');
   // Route::get('/dashboard',ChatShowController::class)->name('chat.show');
    Route::get('/{chat}', ChatShowController::class)->name('chat.show');
    Route::get('/', ChatShowController::class)->name('chat.new');
    Route::post('/messages/send/{chat}', SendMessageController::class)->name('message.send');
    // Route::get('/', function () {

    // });

});
