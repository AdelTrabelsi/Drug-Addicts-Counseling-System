@extends('layout')

@section('header')
@include('header')
@endsection()

@section('content')
    <fieldset>
        


        
        <legend>Nouveau Psychologue</legend>
        <form action="{{ route('psychologues.store') }}" method="post" enctype="multipart/form-data">
            @include('psychologue.form')
        </form>
    </fieldset>
@endsection

@section('footer')
@include('footer')
@endsection()