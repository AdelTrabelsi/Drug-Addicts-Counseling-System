@extends('layout')


@section('header')
    @include('header')
@endsection()
@section('content')

<div class="doctor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
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
        <div class="panel-footer">
                <div class="row">
                    <a href="{{ route('membres.edit', ['membre'=> $membre->idmembre]) }}" class="btn btn-info">
                        Editer
                    </a>&nbsp;
                    <form action="{{ route('membres.destroy', ['membre'=> $membre->idmembre]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
    </div>
    </div>
    </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection()