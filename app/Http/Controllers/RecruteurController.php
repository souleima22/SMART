<?php

namespace App\Http\Controllers;

use App\Models\Recruteur;
use Illuminate\Http\Request;
use App\Models\Administrateur;

class RecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruteurs = Recruteur::orderBy('prenom')->paginate(10);
        return view('recruteur.index', compact('recruteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin=Administrateur::all();
        $recruteur = new Recruteur();
        //return view('recruteur.create',compact('recruteur'));
        return view('recruteur.create',['recruteur'=>$recruteur,'admins'=>$admin]);
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
        $recruteur = Recruteur::create($validatedData);  
        return redirect()->route('recruteur.show', [$recruteur])->with('successNewRecruteur','Recruteur ajouté avec succés');
        //$this->uploadImage($client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function show(Recruteur $recruteur)
    {
        return view('recruteur.show')->with('recruteur', $recruteur);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruteur $recruteur)
    {
        //return view('recruteur.edit',compact('recruteur'));
        $admin=Administrateur::all();
        $recruteur =Recruteur::find($recruteur);
        return view('recruteur.edit',['recruteur'=>$recruteur,'admins'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruteur $recruteur)
    {
        $validatedData = $this->validate($request,$this->validationRules());
        $recruteur->update($validatedData);
        return redirect()->route('recruteur.show', [$recruteur])->with('successUpdateRecruteur','Recruteur mise à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruteur $recruteur)
    {
        $recruteur ->delete();
        return redirect()->route('recruteur.index', [$recruteur])->with('successDeleteRecruteur','Recruteur supprime avec succés');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $recruteurs = Recruteur::orderBy('secteuractivite')->where('secteuractivite','like','%' .$search. '%')->paginate(5);
        return view('recruteur.index', compact('recruteurs'));
    }
    private function validationRules()
    {
        return [
            'login' => 'required|max:50|min:2',
            'nom' => 'required|max:50|min:2',
            'prenom' => 'required|max:50|min:2', 
            'mdp' => 'required|max:50|min:2',
            'email' => 'required|max:50|min:5',
            'siteweb' => 'required|max:50|min:5',
            'secteuractivite' => 'required|max:50|min:5',
            'adresse' => 'required|max:50|min:2',
            'mobile' => 'required|max:10|min:5',
            'id_admin'=>'required'
            
        ];
    }
}
