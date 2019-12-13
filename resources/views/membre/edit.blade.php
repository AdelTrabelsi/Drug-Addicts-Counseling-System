@extends('layout')

@section('content')
    <fieldset>
        <legend>Editer le membre <strong>{{ $membre->prenom }} {{ $membre->nom }}</strong></legend>
        <form action="{{ route('membre.update', ['membre' => $membre->idmembre]) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @include('membre.form')
        </form>
    </fieldset>
@endsection