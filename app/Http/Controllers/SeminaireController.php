<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminaire;
use App\Models\Animateur; // For dropdown

class SeminaireController extends Controller
{
    public function index()
    {
        $seminaires = Seminaire::with('animateur')->paginate(10);
        return view('Events.seminaires.index', compact('seminaires'));

    }



    public function search(Request $request)
    {
        $search = $request->input('search'); // Get the search query
    
        // Query Seminaire with optional search filters
        $seminaires = Seminaire::query()
            ->when($search, function ($query, $search) {
                $query->where('theme', 'like', "%{$search}%") // Search in theme
                      ->orWhere('description', 'like', "%{$search}%") // Search in description
                      ->orWhereHas('animateur', function ($query) use ($search) {
                          $query->where('nom', 'like', "%{$search}%"); // Search in animateur's name
                      });
            })
            ->with('animateur') // Load animateur relationship
            ->paginate(10);
    
        return view('Events.seminaires.search', compact('seminaires', 'search'));
    }
    
    

    public function create()
    {
        $animateurs = Animateur::all(); // Fetch all animateurs for the dropdown
        return view('Events.seminaires.create', compact('animateurs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'theme' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'description' => 'nullable|string',
            'cout_journalier' => 'required|numeric|min:0',
            'animateur_id' => 'required|exists:animateurs,id',
        ]);

        Seminaire::create($request->all());

        return redirect()->route('seminaires.index')->with('success', 'Séminaire created successfully.');
    }

    public function edit($id)
    {
        $seminaire = Seminaire::findOrFail($id);
        $animateurs = Animateur::all();
        return view('Events.seminaires.edit', compact('seminaire', 'animateurs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'theme' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'description' => 'nullable|string',
            'cout_journalier' => 'required|numeric|min:0',
            'animateur_id' => 'required|exists:animateurs,id',
        ]);

        $seminaire = Seminaire::findOrFail($id);
        $seminaire->update($request->all());

        return redirect()->route('seminaires.index')->with('success', 'Séminaire updated successfully.');
    }


   



    public function destroy($id)
    {
        $seminaire = Seminaire::findOrFail($id);
        $seminaire->delete();

        return redirect()->route('seminaires.index')->with('success', 'Séminaire deleted successfully.');
    }
}
