@extends('layout')

@section('header')
    @include('header')
@endsection()

@section('content')

<div class="doctor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
       
@if (session('successDelete'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('successDelete') }}
    </div>
    <br>
  @endif
    <a href="{{ route('membres.create') }}">
        <button class="btn btn-primary">Nouveau membre</button>
    </a>
    <h2>Liste des membres</h2>
    <ul class="list-group">
        @foreach ($membres as $membre)
            <li class="list-group-item">
            <a href="{{ route('membres.show', ['membre' => $membre->idmembre]) }}">
                    {{ $membre->prenom }} {{ $membre->nom }}
                </a>
                <p class="small">Tel: {{ $membre->tel }}</p>
            </li>
        @endforeach
        <div>
            {{ $membres->links() }}
       </div>
    </ul>
    
    </div>
    </div>

    </div>

    </div>

@endsection

@section('footer')
    @include('footer')
@endsection()