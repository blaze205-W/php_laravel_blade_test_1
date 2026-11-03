<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form_receive', function () {
    var_dump($_GET);
    echo $_GET["name"] ;
    
});


