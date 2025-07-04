<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::resource("tasks", TaskController::class);

Route::fallback(function () {
    return 'Ops, something is wrong!';
});
