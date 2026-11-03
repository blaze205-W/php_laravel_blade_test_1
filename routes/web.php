<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form_receive', function () {
    
    echo "<h1> FeedBack </h1>";
    
    echo "<br>";
    echo "Name: " . $_GET["name"] ;
    echo "<br>";
    echo "Comment: ". $_GET["text"] ;
});


