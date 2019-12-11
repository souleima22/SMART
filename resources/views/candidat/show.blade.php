@extends('Layout.template') 
@section('content')

<br><br>
    @if (session('successNewCandidat'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewCandidat') }}
        </div>
        <br>
    @endif
    @if (session('successUpdateCandidat'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successUpdateCandidat') }}
        </div>
        <br>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title" > <strong> {{ $candidat->prenom.' '.$candidat->nom }} </strong></h3>
        </div>
        <div class="panel-body py-3">
            <ul class="list-group">
                <li class="list-group-item">{{ $candidat->titre }}</li>
                <li class="list-group-item">{{ $candidat->login }}</li>
                <li class="list-group-item">{{ $candidat->mdp }}</li>
                <li class="list-group-item">{{ $candidat->adresse }}</li>
                <li class="list-group-item">{{ $candidat->datedenaissance }}</li>
                <li class="list-group-item">{{ $candidat->etatCivil }}</li>
                <li class="list-group-item">{{ $candidat->ville }}</li>
                <li class="list-group-item">{{ $candidat->mobile }}</li>
                <li class="list-group-item">{{ $candidat->email }}</li>
                <li class="list-group-item">{{ $candidat->niveauExperience }}</li>
            
            </ul>
        </div>
        <div class="panel-footer py-2">
            <div class="row">
                <a href="{{ route('candidat.edit', ['candidat'=> $candidat->id]) }}" class="btn btn-info">
                    Editer
                </a>&nbsp;
                <form action="{{ route('candidat.destroy', ['candidat'=> $candidat->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection