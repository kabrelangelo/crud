<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits=Produit::all();
        return view('produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create', compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'npro' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'qstock' => 'required',
            'description' => 'required',
        ]);
        Produit::create($request->all());
        return redirect()->route('produits.index')->with('Produit crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        return view('produits.show', compact('produit'));
        
    }
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        return view('produits.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'npro' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'qstock' => 'required',
            'description' => 'required',
        ]);
        $produit->update($request->all());
        return redirect()->route('produit.index')->with('Produit mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('Produit supprimé avec succès !');
    }
}
