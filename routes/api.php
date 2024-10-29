<?php

use App\Http\Controllers\Transport\TransportCreatePostController;
use Illuminate\Support\Facades\Route;

Route::post('/transport', [TransportCreatePostController::class, '__invoke']);
