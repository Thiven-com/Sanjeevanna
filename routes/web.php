<?php

use App\Http\Controllers\PageControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageControllers::class, 'home'])->name('home');
Route::get('about', [PageControllers::class, 'about'])->name('about');
Route::get('service',[PageControllers::class,'service'])->name('service');
Route::get('contact',[PageControllers::class,'contact'])->name('contact');