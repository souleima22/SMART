<?php

<<<<<<< HEAD
namespace App\Http\Controllers;
=======
<<<<<<< HEAD
namespace App\Http\Controllers;
=======
namespace App\Gttp\Controllers;
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce

use App\Models\Administrateur;
use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrateurs = Administrateur::orderBy('login')->paginate(20);
        return view('admin.index', compact('administrateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $administrateur = new Candidat();
=======
<<<<<<< HEAD
        $administrateur = new Candidat();
=======
        $administrateur = new Administrateur();
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
        return view('admin.create',compact('administrateur'));
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
        $administrateur = Administrateur::create($validatedData);  
        return redirect()->route('admin.show', [$administrateur])->with('successNewAdministrateur ','administrateur  ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function show(Administrateur $administrateur)
    {
        return view('admin.show')->with('administrateur', $administrateur);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrateur $administrateur)
    {
        return view('admin.edit',compact('administrateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrateur $administrateur)
    {
        $validatedData = $this->validate($request,$this->validationRules());
        $administrateur->update($validatedData);
        return redirect()->route('admin.show', [$administrateur])->with('successUpdateAdministrateur','Administrateur mise à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrateur $administrateur)
    {
        $administrateur ->delete();
        return redirect()->route('admin.index', [$administrateur])->with('successDeleteAdministrateur','Administrateur supprime avec succés');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $administrateurs = Administrateur::orderBy('login')->where('login','like','%' .$search. '%')->paginate(5);
        return view('admin.index', compact('administrateurs'));
    }
    private function validationRules()
    {
        return [
            'login' => 'required|max:50|min:5',
<<<<<<< HEAD
            'password' => 'required|max:50|min:5'
=======
<<<<<<< HEAD
            'password' => 'required|max:50|min:5'
=======
            'password' => 'required|max:50|min:5',
            'email' => 'required|max:50|min:5'
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
        ];
    }
}
