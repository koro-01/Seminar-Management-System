<?php

namespace App\Http\Controllers;

use App\Models\Animateur;
use Illuminate\Http\Request;

class AnimateurController extends Controller
{
    // Display a list of animateurs
    public function index()
    {
        $animateurs = Animateur::paginate(10); // Pagination for list
        return view('Events.animateurs.index', compact('animateurs'));
    }

    // Show the form for creating a new animateur
    public function create()
    {
        return view('Events.animateurs.create');
    }

    // Store a newly created animateur in the database
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'specialite' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:animateurs',
        ]);

        Animateur::create($request->all());
        return redirect()->route('animateurs.index')->with('success', 'Animateur created successfully.');
    }

    // Display a specific animateur
    public function show(Animateur $animateur)
    {
        return view('Events.animateurs.show', compact('animateur'));
    }

    // Show the form for editing an animateur
    public function edit(Animateur $animateur)
    {
        return view('Events.animateurs.edit', compact('animateur'));
    }

    // Update the specified animateur in the database
    public function update(Request $request, Animateur $animateur)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'specialite' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:animateurs,email,' . $animateur->id,
        ]);

        $animateur->update($request->all());
        return redirect()->route('animateurs.index')->with('success', 'Animateur updated successfully.');
    }

    // Remove the specified animateur from the database
    public function destroy(Animateur $animateur)
    {
        $animateur->delete();
        return redirect()->route('animateurs.index')->with('success', 'Animateur deleted successfully.');
    }
}
