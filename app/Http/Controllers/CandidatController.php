<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Administrateur;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidats = Candidat::orderBy('prenom')->paginate(10);
        return view('Candidat.index', compact('candidats'));
        //$candidats = Candidat::orderBy('prenom')->paginate(10);
        //$admin =Administrateur::find('id_admin');
        //$candidats=Candidat::with('admin')->get();
        //$candidats=Candidat::all();  
        //return view('Candidat.index', ['candidats'=>$candidats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin=Administrateur::all();
        $candidat = new Candidat();
        return view('candidat.create',['candidat'=>$candidat,'admins'=>$admin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $this->validate($request,$this->validationRules());
        $candidat = Candidat::create($validatedData);  
        return redirect()->route('candidat.show', [$candidat])->with('successNewCandidat','Candidat ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        return view('candidat.show')->with('candidat', $candidat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit($candidat)
    {
        $admin=Administrateur::all();
        $candidat =Candidat::find($candidat);
        return view('candidat.edit',['candidat'=>$candidat,'admins'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidat $candidat)
    {
        $validatedData = $this->validate($request,$this->validationRules());
        $candidat->update($validatedData);
        return redirect()->route('candidat.show', [$candidat])->with('successUpdateCandidat','Candidat mise à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        $candidat ->delete();
        return redirect()->route('candidat.index', [$candidat])->with('successDeleteCandidat','Candidat supprime avec succés');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $candidats = Candidat::orderBy('email')->where('email','like','%' .$search. '%')->paginate(5);
        return view('candidat.index', compact('candidats'));
    }
    private function validationRules()
    {
        return [
            'titre' => 'required|max:50|min:2',
            'nom' => 'required|max:50|min:2',
            'prenom' => 'required|max:50|min:2',
            'login' => 'required|max:50|min:2',
            'mdp' => 'required|max:50|min:2',
            'adresse' => 'required|max:50|min:2',
            'datedenaissance' => 'required|date',
            'etatCivil' => 'required|max:50|min:2',
            'ville' => 'sometimes|max:50|min:2',
            'mobile' => 'required|max:10|min:5',
            'email' => 'required|max:50|min:5',
            'niveauExperience' => 'required|max:20|min:3',
            'id_admin'=>'required'
        ];
    }
}
