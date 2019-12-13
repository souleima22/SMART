@extends('Layout.template')
@section('content')
    <fieldset >
        <legend>Editer l'offre d'emploi </legend>
        <strong> {{$offre->reference }} {{$offre->description}}</strong>
        <form action="{{ route('offre.update',['offre' => $offre->id]) }}" method="get" enctype="multipart/form-data">
            @method('PATCH') 
            @include('offre.form')
        </form>
    </fieldset>
@endsection