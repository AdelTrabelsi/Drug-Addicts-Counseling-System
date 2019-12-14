@extends('layout')

@section('header')
@include('header')
@endsection()

@section('content')

<div class="doctor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
    <fieldset>
        <legend>Nouveau Psychologue</legend>
        <form action="{{ route('psychologues.store') }}" method="post" enctype="multipart/form-data">
            @include('psychologue.form')
        </form>
    </fieldset>
    </div>
    </div>
    </div>
    </div>
@endsection

@section('footer')
@include('footer')
@endsection()