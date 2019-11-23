<?php

namespace App\Http\Controllers;

use App\Models\Recruteur;
use Illuminate\Http\Request;

class RecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Recruteurs = Recruteur::orderBy('login')->paginate(10);//select * from table client
        // return $clients; 
        return view('Recruteur.index', compact('Recruteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function show(Recruteur $recruteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruteur $recruteur)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruteur $recruteur)
    {
        //
    }
}
