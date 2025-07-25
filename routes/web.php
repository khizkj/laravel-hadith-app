<?php

use App\Http\Controllers\Hadtihcontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[Hadtihcontroller::class,'gethadith']);

Route::get('/chapters/{bookslug}', [Hadtihcontroller::class,'getHadithChapter']);

Route::get('/hadith/chapters/{bookslug}/{chapterNum}', [Hadtihcontroller::class, 'readHadiths']);

