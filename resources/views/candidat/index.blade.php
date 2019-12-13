@extends('Layout.template') 
@section('content')
<title>Offre d'emploi | Candidat</title>
<div class="title-m-b-md">

  <style>
    table, th, td {     
        border: 1px solid black; 
        border-collapse: collapse;  
          }   
    th { background-color: #308281;
               color: white;
                            } 
    /* table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;} */
    tr:nth-child(even) {background-color: #C7CBAE ;}    
  </style> 
  @if (session('successDeleteCandidat'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('successDeleteCandidat') }}
    </div>
    <br>
  @endif  
  <div class="row">
      <div class="col-md-6"><a href="{{route('candidat.create')}}">
          <span class="input-group-prepend">
          <button class="btn btn-primary">Ajouter un nouveau candidat</button>
          </span>
          </a> 
    </div>
      <div class="col-md-6"><div align="right"> 
          <form action="/search" method="GET">
            <div class="input-group">
                <span class="input-group-prepend" align="right">
                    <button type="submit" class="btn btn-primary">Rechercher par Email</button>
                </span>
              <input type="search" name="search" class="form-control">
              
            </div>  
          </form> 
          </div></div>
    </div>
  
      
  <table>   
      <tr> 
        <th>Titre</th> 
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Login</th>
        <th>Adresse</th>
        <th>Etat Civil</th>
        <th>Ville</th>
        <th>Mobile</th>
        <th>Niveau Experience</th>
        <th>L'administrateur </th>
      </tr>
          
          
      @foreach ($candidats as $candidat)
          
      <tr>
       
         <td>{{ $candidat->titre }}</td>
         <td>{{ $candidat->nom }}</td>
         <td>{{ $candidat->prenom }}</td>
         <td>{{ $candidat->email }}</td>
          <td>{{ $candidat->login }}</td>
         <td>{{ $candidat->adresse }}</td>
         <td>{{ $candidat->etatCivil }}</td>
         <td>{{ $candidat->ville }}</td>
         <td>{{ $candidat->mobile }}</td>
         <td>{{ $candidat->niveauExperience }}</td>
         <td>{{ $candidat->id_admin }}</td>
          <td>  <div class="col-md-6">
            <a href="{{ route('candidat.show', ['candidat'=>$candidat->id]) }}">
            <span class="input-group-prepend">
            <button class="btn btn-primary">Consulter</button>
            </span>
            </a> 
      </div></td>
      </tr>
      @endforeach
      <div>
        {{ $candidats-> links() }}
       </div>
          </table>     
             </div>
             
    
@endsection          
       
