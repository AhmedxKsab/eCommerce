<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\UserController;

// lesson naming routing and naming spaces prefeix 
// هنا انا بفتح ال route بتاع اليوزر اللي جواه controller فيه method بتعمل حاجه معينه
Route::prefix('users')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/', 'ShowAdminName');
    });