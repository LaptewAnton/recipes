<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    public function index(){
        $recipes = DB::table('recipes')->paginate(15);
        return view('recipes', [
            'recipes' => $recipes,
        ]);
    }
    public function show($id){
        return view('recipe', [
            'recipe' => Recipe::find($id),
        ]);
    }
}
