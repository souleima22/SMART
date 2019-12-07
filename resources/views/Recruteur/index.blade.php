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
    
    tr:nth-child(even) {background-color: #C7CBAE ;}    
  </style>          
  <table>   
      <tr> 
        <th>login</th> 
        <th>mdp</th>
        <th>email</th>
        <th>siteweb</th>
        <th>secteuractivite</th>    
        <th>adresse</th>
        <th>telephone</th>
      </tr>
          
          
      @foreach ($Recruteurs as $recruteur)
          
      <tr>
  
         <td>{{ $recruteur->login }}</td>
         <td>{{ $recruteur->mdp }}</td>
         <td>{{ $recruteur->mail }}</td>
         <td>{{ $recruteur->siteweb }}</td>
         <td>{{ $recruteur->secteuractivite }}</td>
         <td>{{ $recruteur->adresse }}</td>
         <td>{{ $recruteur->telephone }}</td>
        
  
      </tr>
      @endforeach
          <div>
          {{$Recruteurs -> links()}}
          </div>
          </table>
            
             </div>
    
@endsection