@extends('Layout.template') 
@section('content')
    <fieldset>
        <legend>Modifier le candidat <strong>{{ $candidat->prenom }} {{ $candidat->nom }}</strong></legend>
        <form action="{{ route('candidat.update', ['candidat' => $candidat->id]) }}" method="post">
            @method('PATCH')
            @include('candidat.form')
        </form>
    </fieldset>
@endsection