<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;


//create ingredient

class AtelierController extends Controller
{
    public function atelier () {
        return view('welcome');
    }
    public function store (Request $request) {
        $store = new Ingredient();
        $store->nom = $request->nom;
        $store->quantite = $request->quantite;
        $store->save();

        return redirect('/');
    }

    public function destroy($id){
        $destroy = Ingredient::find($id);
        $destroy->delete();

        return redirect('/');
    }

    public function show($id){
        $show = Ingredient::find($id);
        return view('partials.show', compact('show'));
    }
}
