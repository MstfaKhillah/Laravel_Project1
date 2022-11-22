<?php

use Illuminate\Support\Facades\Route;


// Route::get('url', 'Action');
// Route::post('url', 'Action');
// Route::put('url', 'Action');
// Route::patch('url', 'Action');
// Route::delete('url', 'Action');

Route::get('new', function() {
    return 'Hello';
});

Route::get('/', function() {
    return 'Homepage';
});

Route::get('user/{name}/{age}/{username}', function($name, $age, $username) {
    return 'User: ' .$name . ' | Age: ' .$age . ' | User Name: ' . $username;
})-> whereAlpha('name')->whereNumber('age')->whereAlphaNumeric('username');