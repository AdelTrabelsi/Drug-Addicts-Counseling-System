@extends('layout')

@section('content')

@if (session('successDelete'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('successDelete') }}
    </div>
    <br>
  @endif
    <a href="{{ route('psychologues.create') }}">
        <button class="btn btn-primary">Nouveau psychologue</button>
    </a>
    <h2>Liste des psychologues</h2>
    <ul class="list-group">
        @foreach ($psychologues as $psychologue)
            <li class="list-group-item">
            <a href="{{ route('psychologues.show', ['psychologue' => $psychologue->id_psychologues]) }}">
                    {{ $psychologue->prenom }} {{ $psychologue->nom }}
                </a>
                <p class="small">Tel: {{ $psychologue->tel }}</p>
            </li>
        @endforeach
        <div>
            {{ $psychologues->links() }}
        </div>
    </ul>
@endsection

