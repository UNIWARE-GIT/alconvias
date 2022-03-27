<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/services', function ()
{
    return view('layout.pages.services');
})->name('services');

Route::get('/products', function ()
{
    return view('layout.pages.products');
})->name('products');

Route::get('/jobs', function ()
{
    return view('layout.pages.jobs');
})->name('jobs');

Route::get('/contacts', function ()
{
    return view('layout.pages.contact');
})->name('contacts');
