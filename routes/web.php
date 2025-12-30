<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Website\WebsiteController;

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboad');

    Route::get('workout', [DashboardController::class, 'workout'])->name('workout.index');
    Route::get('workout/create', [DashboardController::class, 'workoutCreate'])->name('workout.create');

    Route::get('recipe', [DashboardController::class, 'recipe'])->name('recipe.index');
    Route::get('recipe/create', [DashboardController::class, 'recipeCreate'])->name('recipe.create');
});


Route::prefix('website')->group(function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('website.dashboad');
});