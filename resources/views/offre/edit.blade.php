@extends('Layout.template')
@section('content')
    <fieldset >
        <legend>Modifier l'offre d'emploi <strong> {{$offre->reference }} {{$offre->description}}</strong></legend>
        
        <form action="{{ route('offre.update',['offre' => $offre->id]) }}" method="post" enctype="multipart/form-data">
            @method('PATCH') 
            @include('offre.form')
        </form>
    </fieldset>
@endsection