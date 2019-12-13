@extends('layout')

@section('content')
    <fieldset>
        


        
        <legend>Nouveau Psychologue</legend>
        <form action="{{ route('psychologues.store') }}" method="post" enctype="multipart/form-data">
            @include('psychologue.form')
        </form>
    </fieldset>
@endsection