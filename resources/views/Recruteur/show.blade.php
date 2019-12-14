@extends('Layout.template') 
@section('content')

<br><br>
    @if (session('successNewRecruteur'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewRecruteur') }}
        </div>
        <br>
    @endif
    @if (session('successUpdateRecruteur'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successUpdateRecruteur') }}
        </div>
        <br>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title" > <strong> {{ $recruteur->prenom.' '.$recruteur->nom }} </strong></h3>
        </div>
        <div class="panel-body py-3">
            <ul class="list-group">
                <li class="list-group-item">{{ $recruteur->login }}</li>
                <li class="list-group-item">{{ $recruteur->nom }}</li>
                <li class="list-group-item">{{ $recruteur->prenom }}</li>
                <li class="list-group-item">{{ $recruteur->mdp }}</li>
                <li class="list-group-item">{{ $recruteur->email }}</li>
                <li class="list-group-item">{{ $recruteur->siteweb }}</li>
                <li class="list-group-item">{{ $recruteur->secteuractivite }}</li>
                <li class="list-group-item">{{ $recruteur->adresse }}</li>
                <li class="list-group-item">{{ $recruteur->mobile }}</li>
                <li class="list-group-item">{{ $recruteur->admin->login }}</li>
            </ul>
        </div>
        <div class="panel-footer py-2">
            <div class="row">
                <div class="col-md-6">
                <a href="{{ route('recruteur.edit', ['recruteur'=> $recruteur->id]) }}" class="btn btn-info">
                    Editer
                </a>
            </div>
            <div class="col-md-6">
                <form action="{{ route('recruteur.destroy', ['recruteur'=> $recruteur->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection