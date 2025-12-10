<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function workout(){
        return view('admin.workout.index');
    }

    public function workoutCreate(){
        return view('admin.workout.create');
    }

    public function recipe(){
        return view('admin.recipe.index');
    }

    public function recipeCreate(){
        return view('admin.recipe.create');
    }
}
