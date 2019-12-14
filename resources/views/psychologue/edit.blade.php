@extends('layout')

@section('content')
<div class="doctor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
    <fieldset>
        <legend>Editer le Psychologue <strong>{{ $psychologue->prenom }} {{ $psychologue->nom }}</strong></legend>
        <form action="{{ route('psychologues.update', ['psychologue' => $psychologue->id_psychologues]) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @include('psychologue.form')
        </form>
    </fieldset>
    </div>
    </div>
    </div>
    </div>
@endsection