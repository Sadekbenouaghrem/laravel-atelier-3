@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
       <div class="pull-left">
        <h2>Ajout nouvel Etudiant</h2>
    </div>
      <div class="pull-right">
        <a class="btn btn-primary " href="{{ route('etudiant')}}">back </a>
      </div>
   </div>
</div>
@if ($errors->any())
   <div class="alert alert-danger">
    <strong>whoops!</strong>There were some problems with your input.<br>
    <br>
           <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
           </ul>
    </br>
@endif

<form action="{{ route('etudiant.ajouter')}}" method="POST">
    @csrf 
    

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Nom :</strong>
                <input type="text" name="nom" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Nom :</strong>
                <input type="text" name="prenom"  class="from-control">
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Classe :</strong>
                <select name="classe_id" class="from-control">
                  <option></option>
                  @foreach($classes as $classes)
                    <option value="{{$classes->id}}">{{$classes->libelle}}
                    </option>
                    @endforeach
                    
                
                 
               </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
</div>
</form>
@endsection
