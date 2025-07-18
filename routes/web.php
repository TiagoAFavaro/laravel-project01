<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowTweets;

Route::get('/', function () {
    return view('welcome');
});

Route::get('show-tweets', ShowTweets::class);