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
    table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}
    tr:nth-child(even) {background-color: #C7CBAE ;}    
  </style>          
  <table>   
      <tr> 
        <th>Titre</th> 
        <th>Nom</th>
        <th>Prénom</th>
        <th>Login</th> 
        <th>Adresse</th>
        <th>Etat Civil</th>
        <th>Ville</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Niveau Experience</th>
      </tr>
          
          
      @foreach ($candidats as $candidat)
          
      <tr>
  
         <td>{{ $candidat->titre }}</td>
         <td>{{ $candidat->nom }}</td>
         <td>{{ $candidat->prenom }}</td>
         <td>{{ $candidat->login }}</td>
         <td>{{ $candidat->adresse }}</td>
         <td>{{ $candidat->etatCivil }}</td>
         <td>{{ $candidat->ville }}</td>
         <td>{{ $candidat->mobile }}</td>
         <td>{{ $candidat->email }}</td>
         <td>{{ $candidat->niveauExperience }}</td>
  
      </tr>
      @endforeach
      <div>
        {{ $candidats-> links() }}
</div>
          </table>
            
             </div>
    
@endsection          
       
