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
  
      </tr>
      @endforeach
      <div>
            {{ $offres->links() }}
        </div>
          </table>
            
             </div>
            
    
@endsection