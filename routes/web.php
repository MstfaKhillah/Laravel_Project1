<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Route::get('url', 'Action');
// Route::post('url', 'Action');
// Route::put('url', 'Action');
// Route::patch('url', 'Action');
// Route::delete('url', 'Action');

Route::get('/new', [HomeController::class, 'new']);

Route::get('nnew', function () {
    return 'Hello';
});

Route::get('/', function () {
    return 'Homepage';
});

Route::get('user/{name}/{age}/{username}', function ($name, $age, $username) {
    return 'User: ' . $name . ' | Age: ' . $age . ' | User Name: ' . $username;
})->whereAlpha('name')->whereNumber('age')->whereAlphaNumeric('username');
