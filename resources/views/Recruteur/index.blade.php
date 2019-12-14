@extends('Layout.template') 
@section('content')
<title>Offre d'emploi | Recruteur</title>
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
  @if (session('successDeleteRecruteur'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('successDeleteRecruteur') }}
    </div>
    <br>
  @endif  
  <div class="row">
      <div class="col-md-6"><a href="{{route('recruteur.create')}}">
          <span class="input-group-prepend">
          <button class="btn btn-primary">Ajouter un nouveau recruteur</button>
          </span>
          </a> 
    </div>
      <div class="col-md-6"><div align="right"> 
          <form action="/search" method="GET">
            <div class="input-group">
                <span class="input-group-prepend" align="right">
                    <button type="submit" class="btn btn-primary">Rechercher par Secteur d'activité</button>
                </span>
              <input type="search" name="search" class="form-control">
              
            </div>  
          </form> 
          </div></div>
    </div>
  
      
  <table>   
      <tr> 
        <th>Login</th>
        <th>Nom</th>
        <th>Prénom</th> 
        <th>Email</th>
        <th>Site Web</th>
        <th>Secteur D'activite</th>
        <th>Adresse</th>
        <th>Mobile</th>
        <th>l'administrateur<th>
      </tr>
          
          
      @foreach ($recruteurs as $recruteur)
          
      <tr>
       
         <td>{{ $recruteur->login }}</td>
         <td>{{ $recruteur->nom }}</td>
         <td>{{ $recruteur->prenom }}</td>
         <td>{{ $recruteur->email }}</td>
         <td>{{ $recruteur->siteweb }}</td>
         <td>{{ $recruteur->secteuractivite }}</td> 
         <td>{{ $recruteur->adresse }}</td>
         <td>{{ $recruteur->mobile }}</td>
         <td>{{ $recruteur->admin->login }}</td>
        <!-- <td>{{ $recruteur->id_admin }}</td>-->
          <td>  <div class="col-md-6">
            <a href="{{ route('recruteur.show', ['recruteur'=>$recruteur->id]) }}">
            <span class="input-group-prepend">
            <button class="btn btn-primary">Consulter</button>
            </span>
            </a> 
      </div></td>
      </tr>
      @endforeach
      <div>
        {{ $recruteurs-> links() }}
       </div>
          </table>     
             </div>
             
    
@endsection          
       
