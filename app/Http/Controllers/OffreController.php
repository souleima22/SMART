<?php

namespace App\Http\Controllers;

use App\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::orderBy('reference')->paginate(10);
        return view('offre.index', compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offres = new Offre();
        return view('offre.create', compact('offres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, $this->validationRules());
        $offres = Offre::create($validatedData);
        return redirect()->route('offre.show', [$offres])
                        ->with('successNewOffre', 'Offre ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        return view('offre.show')->with('offre', $offre);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        return view('offre.edit', compact('offre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        $validatedData = $this->validate($request, $this->validationRules());
        $offre->update($validatedData);
        $this->reference($offre);
        return redirect()->route('offre.show', [$offre])->with('successUpdateOffre', 'Offre mis à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        $offre->delete();
        return redirect()->route('offre.index')->with('successDelete','offre supprimé');
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
        $offres = Offre::orderBy('reference')->where('reference','like','%' .$search. '%')->paginate(5);
        return view('offre.index', compact('offres'));
    }

    private function validationRules()
    {
        return [
            'reference' => 'required|max:50|min:2',
            'description' => 'required|max:50|min:2',
            'titre' => 'required|max:50|min:2',
            'lieu' => 'required|max:70|min:5',
            'typeContrat' => 'required|max:50|min:2',
            'salaire' => 'required|max:50|min:2',
            'duree' => 'required|date',
            'niveauPoste' => 'required|max:50|min:2',
            'niveauEtude' => 'required|max:50|min:2',
        ];
    }
}

 
