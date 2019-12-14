@extends('Layout.template') 
@section('content')
<div class="title-m-b-md">

  <style>
    table, th, td {     
        border: 1px solid black; 
        border-collapse: collapse;  
          }   
    th { background-color: #308281;
               color: white;
                            } 
    tr:nth-child(even) {background-color: #C7CBAE ;}    
  </style>    
 @if (session('successDelete'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('successDelete') }}
    </div>
    <br>
  @endif 
  <div>
  <a href="{{route('offre.create')}}">
      <button class="btn btn-primary">Ajouter un nouveau offre</button>
      </a>       
      <div class="col-md-6"><div align="left"> 
          <form action="/search" method="GET">
            <div class="input-group">
                <span class="input-group-prepend" align="right">
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </span>
              <input type="search" name="search" class="form-control">
              
            </div>   
          </form>
        </div>
  </div>

  <table>   
      <tr> 
        <th>Reference</th> 
        <th>Description</th>
        <th>Titre</th>
        <th>Lieu</th>
        <th>Type Contrat</th>    
        <th>Salaire</th>
        <th>Duree</th>
        <th>Niveau Poste</th>
        <th>Niveau Etude</th>
      </tr>
          
      @foreach ($offres as $offre)
          
      <tr>
  
         <td>{{ $offre->reference }}</td>
         <td>{{ $offre->description }}</td>
         <td>{{ $offre->titre }}</td>
         <td>{{ $offre->lieu }}</td>
         <td>{{ $offre->typeContrat }}</td>
         <td>{{ $offre->salaire }}</td>
         <td>{{ $offre->duree }}</td>
         <td>{{ $offre->niveauPoste }}</td>
         <td>{{ $offre->niveauEtude }}</td>
         <td></td>
         <td>  <div class="col-md-6">
            <a href="{{ route('offre.show', ['offre'=>$offre->id]) }}">
            <span class="input-group-prepend">
            <button class="btn btn-primary">Consulter</button>
            </span>
            </a> 
      </div></td>
      </tr>
      @endforeach
      <div>
            {{ $offres->links() }}
        </div>
          </table>
            
             </div>
            
    
@endsection