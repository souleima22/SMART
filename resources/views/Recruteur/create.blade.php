@extends('Layout.template') 
@section('content')
<style>
    legend {
  color: midnightblue;
}
</style>
    <fieldset >
        @error('nom')
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ $message }}
        </div>
        @enderror
    
        @error('prenom')
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ $message }}
            </div>
        @enderror
        <legend> Les coordonnées de nouveau recruteur</legend>
        <form action="{{ route('recruteur.store') }}" method="post">
            @include('recruteur.form')
        </form>
    </fieldset>
@endsection