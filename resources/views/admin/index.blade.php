@extends('Layout.template') 
@section('content')
<title>Liste d'administrateurs</title>
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
        <th>password</th>
        
      </tr>
          
          
      @foreach ($administrateurs as $administrateur)
          
      <tr>
  
         <td>{{ $administrateur->login}}</td>
         <td>{{ $administrateur->password }}</td>
        
  
      </tr>
      @endforeach
      <div>
        {{ $administrateurs-> links() }}
</div>
          </table>
            
             </div>
    
@endsection          
       
