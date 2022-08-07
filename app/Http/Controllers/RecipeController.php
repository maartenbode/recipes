<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Dashboard', [
            'recipes' => $request->user()->recipes()->with('steps', 'ingredients')->get(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Recipe $recipe)
    {
        //
    }

    public function edit(Recipe $recipe)
    {
        //
    }

    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    public function destroy(Recipe $recipe)
    {
        //
    }
}
