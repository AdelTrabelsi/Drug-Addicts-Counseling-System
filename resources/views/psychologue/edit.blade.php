@extends('layout')

@section('content')
    <fieldset>
        <legend>Editer le Psychologue <strong>{{ $psychologue->prenom }} {{ $psychologue->nom }}</strong></legend>
        <form action="{{ route('psychologues.update', ['psychologue' => $psychologue->id_psychologues]) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @include('psychologue.form')
        </form>
    </fieldset>
@endsection