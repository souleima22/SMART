<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Offre;
=======
<<<<<<< HEAD
use App\Models\Offre;
=======
use App\Offre;
use App\Models\Recruteur;
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
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
        $rec=Recruteur::all();
        $offres = new Offre();
        return view('offre.create', ['offre'=>$offres,'recru'=>$rec]);
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
        $rec=Recruteur::all();
        $offre =Offre::find($offre);
        return view('offre.edit', ['offre'=>$offre,'recru'=>$rec]);
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
        $offres = Offre::orderBy('reference')->where('reference','like','%' .$search. '%');
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
            'id_recr'=>'required'
        ];
    }
}

 
