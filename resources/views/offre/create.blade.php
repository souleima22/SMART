@extends('Layout.template') 
@section('content')
<fieldset >
        @error('reference')
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ $message }}
        </div>
        @enderror
    
        @error('description')
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ $message }}
            </div>
        @enderror
        
        <form action="{{ route('offre.store') }}" method="post" enctype="multipart/form-data">
            @include('offre.form')
        </form>
    </fieldset>

                
            
@endsection 