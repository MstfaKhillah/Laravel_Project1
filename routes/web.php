<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiteController;


// Route::get('url', 'Action');
// Route::post('url', 'Action');
// Route::put('url', 'Action');
// Route::patch('url', 'Action');
// Route::delete('url', 'Action');

Route::get('/new', [HomeController::class, 'new']);

Route::get('nnew', function () {
    return 'Hello';
});

// Route::get('/', function () {
//     return 'Homepage';
// });

Route::get('user/{name}/{age}/{username}', function ($name, $age, $username) {
    return 'User: ' . $name . ' | Age: ' . $age . ' | User Name: ' . $username;
})->whereAlpha('name')->whereNumber('age')->whereAlphaNumeric('username');



// Route::get('/', [SiteController::class, 'home']);


// First Normal Routes
Route::get('/', [MainController::class, 'index'])->name('site.index');
Route::get('/about', [MainController::class, 'about'])->name('site.about');
Route::get('/team', [MainController::class, 'team'])->name('site.team');
Route::get('/services', [MainController::class, 'services'])->name('site.services');
Route::get('/contact', [MainController::class, 'contact'])->name('site.contact');
