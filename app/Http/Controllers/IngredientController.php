<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//display ingredient
class IngredientController extends Controller
{
    public function index () {
        $ingredients = Ingredient::all();
        return view('pages.ingredients', compact('ingredients'));
    }
}
