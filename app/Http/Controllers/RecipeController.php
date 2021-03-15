<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::paginate(15);
        return view('recipe.index', [
            'recipes' => $recipes,
        ]);
    }

    public function create()
    {
        return view('recipe.create');
    }

    public function show($id)
    {
        return view('recipe.show', [
            'recipe' => Recipe::find($id),
        ]);
    }

    public function edit($id)
    {
        return view('recipe.edit', [
            'recipe' => Recipe::find($id)
        ]);
    }

    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        if (Auth::user()->id == $recipe->user_id || Auth::user()->admin == 1) {
            $recipe->delete();
            return Redirect::back();
        }
    }
}
