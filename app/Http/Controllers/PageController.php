<?php

namespace App\Http\Controllers;

use App\Recipe;

class PageController extends Controller
{
    public function home(){
        return view('home', [
            'recipes' => Recipe::with('user')->latest()
            ->take(3)->get()
        ]);
    }
}
