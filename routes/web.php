<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;


Route::get('/', function () {
    return view('home');
});

Route::resource('pendaftaran', PendaftaranController::class);

