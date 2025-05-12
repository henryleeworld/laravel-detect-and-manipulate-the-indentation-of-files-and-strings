<?php

use App\Http\Controllers\IndentationController;
use Illuminate\Support\Facades\Route;

Route::get('indentation/change/', [IndentationController::class, 'change']);
