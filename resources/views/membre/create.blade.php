@extends('layout')

@section('content')
    
       
        <legend>Nouveau Membre</legend>
        <form action="{{ route('membres.store') }}" method="post" enctype="multipart/form-data">
            @include('membre.form')
        </form>
    </fieldset>
@endsection