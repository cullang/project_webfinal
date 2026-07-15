<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to UniPortal API Server',
        'status' => 'running',
        'version' => '1.0.0'
    ]);
});