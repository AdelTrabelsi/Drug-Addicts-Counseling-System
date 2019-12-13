@extends('layout')

@section('content')
    <br><br>
    @if (session('successNewPsychologue'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewPsychologue') }}
        </div>
        <br>
    @endif
    @if (session('successUpdatePsychologue'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successUpdatePsychologue') }}
        </div>
        <br>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $psychologue->prenom.' '.$psychologue->nom }}</h3>
        </div>
        <div class="panel-body py-3">
            <ul class="list-group">
                <li class="list-group-item">{{ $psychologue->adresseCabinet }}</li>
                <li class="list-group-item">{{ $psychologue->email }}</li>
                <li class="list-group-item">{{ $psychologue->tel }}</li>

                
            </ul>
        </div>
        <div class="panel-footer py-2">
                <div class="row">
                    <a href="{{ route('psychologues.edit', ['psychologue'=> $psychologue->id_psychologues]) }}" class="btn btn-info">
                        Editer
                    </a>&nbsp;
                    <form action="{{ route('psychologues.destroy', ['psychologue'=> $psychologue->id_psychologues]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
    </div>
@endsection