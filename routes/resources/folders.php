<?php

use App\Http\Controllers\Resources\FoldersController;
use Illuminate\Support\Facades\Route;

Route::resource('/resources/folders', FoldersController::class);
