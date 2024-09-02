<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});   

Route::get('/world', function () {
    return 'World';
});

Route::get('/salam', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Hallo! Saya Triaji Ibnu Hermawan dengan NIM 2241760075';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});
    