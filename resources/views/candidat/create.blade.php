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
        <legend> Les coordonnées de nouveau candidat</legend>
        <form action="{{ route('candidat.store') }}" method="post">
            @include('candidat.form')
        </form>
    </fieldset>
@endsection