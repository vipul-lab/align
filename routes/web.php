<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboad');

    Route::get('workout', [DashboardController::class, 'workout'])->name('workout.index');
    Route::get('workout/create', [DashboardController::class, 'workoutCreate'])->name('workout.create');

    Route::get('recipe', [DashboardController::class, 'recipe'])->name('recipe.index');
    Route::get('recipe/create', [DashboardController::class, 'recipeCreate'])->name('recipe.create');
});
