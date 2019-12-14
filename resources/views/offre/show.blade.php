@extends('Layout.template')
@section('content')
<br><br>
    @if (session('successNewOffre'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewOffre') }}
        </div>
        <br>
    @endif
    @if (session('successUpdateOffre'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successUpdateOffre') }}
        </div>
        <br>
    @endif
    <div class="panel panel-default">
        <div class="panel-body py-3">
            <ul class="list-group">
                <li class="list-group-item">{{ $offre->reference }}</li>
                <li class="list-group-item">{{ $offre->description }}</li>
                <li class="list-group-item">{{ $offre->titre }}</li>
                <li class="list-group-item">{{ $offre->lieu }}</li>
                <li class="list-group-item">{{ $offre->typeContrat }}</li>
                <li class="list-group-item">{{ $offre->salaire }}</li>
                <li class="list-group-item">{{ $offre->duree }}</li>
                <li class="list-group-item">{{ $offre->niveauPoste }}</li>
                <li class="list-group-item">{{ $offre->niveauEtude }}</li>
                <li class="list-group-item">{{ $offre->rec->login }}</li>
            </ul>
        </div>
        <div class="panel-footer py-2">
                <div class="row">
                <a href="{{ route('offre.edit',['offre' => $offre->id])}}" class="btn btn-info">
            Edit </a>
            <form action="{{ route('offre.destroy', ['offre'=> $offre->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>

    </div>
@endsection