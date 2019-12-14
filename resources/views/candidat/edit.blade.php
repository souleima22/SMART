@extends('Layout.template') 
@section('content')
    <fieldset>
<<<<<<< HEAD
        <legend>Modifier le candidat <strong>{{ $candidat->prenom }} {{ $candidat->nom }}</strong></legend>
=======
        <legend>Modifier le candidat <strong>{{ $candidat->nom }} {{ $candidat->prenom }}</strong></legend>
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
        <form action="{{ route('candidat.update', ['candidat' => $candidat->id]) }}" method="post">
            @method('PATCH')
            @include('candidat.form')
        </form>
    </fieldset>
@endsection