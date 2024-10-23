<h1>Liste des étudiants</h1>
@extends('layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des Étudiants</h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
        
        @foreach ($liste as $value)
        <tr>
            <td>{{ $loop->iteration }}</td> <!-- Utilise iteration pour numéroter les lignes -->
            <td>{{ $value->nom }}</td>
            <td>{{ $value->prenom }}</td>
            <td>
                <a class="btn btn-info" href="#">Show</a>
                <a class="btn btn-primary" href="#">Edit</a>
                <form action="#" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr> 
        @endforeach
    </table>
@endsection
