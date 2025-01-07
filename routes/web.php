<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return View::make('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return View::make('dashboard');
    })->name('dashboard');

    // Todo
    Route::get('/todo-list', function () {
        return View::make('todo-list');
    })->name('todo-list');

    // Blog
    Route::get('/blog', function () {
        return View::make('blog');
    })->name('blog');
});