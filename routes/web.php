<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\aController;
 
Route::get('/', [aController::class, 'b']);

?> 