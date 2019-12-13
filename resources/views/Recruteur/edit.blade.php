@extends('Layout.template') 
@section('content')
    <fieldset>
        <legend>Modifier le recruteur <strong>{{ $recruteur->nom }} {{ $recruteur->prenom }}</strong></legend>
        <form action="{{ route('recruteur.update', ['recruteur' => $recruteur->id]) }}" method="post">
            @method('PATCH')
            @include('recruteur.form')
        </form>
    </fieldset>
@endsection