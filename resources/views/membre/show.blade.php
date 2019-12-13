@extends('layout')

@section('content')
    <br><br>
    @if (session('successNewMembre'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewMembre') }}
        </div>
        <br>
    @endif
    @if (session('successUpdateMembre'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successUpdateMembre') }}
        </div>
        <br>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $membre->prenom.' '.$membre->nom }}</h3>
        </div>
        <div class="panel-body py-3">
            <ul class="list-group">
                <li class="list-group-item">{{ $membre->dateNais }}</li>
                <li class="list-group-item">{{ $membre->adresse }}</li>
                <li class="list-group-item">{{ $membre->tel }}</li>
                <li class="list-group-item">{{ $membre->email }}</li>
                <li class="list-group-item">{{ $membre->mdp }}</li>
            </ul>
        </div>
        <div class="panel-footer py-2">
                <div class="row">
                    <a href="{{ route('membre.edit', ['membre'=> $membre->idmembre]) }}" class="btn btn-info">
                        Editer
                    </a>&nbsp;
                    <form action="{{ route('membre.destroy', ['membre'=> $membre->idmembre]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
    </div>
@endsection