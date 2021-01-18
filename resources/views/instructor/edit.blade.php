@extends('layouts.app')

@section('content')

<div class="container">
    <h1><b>{{ __('Edit new instructor') }}</b></h1>
</div>


@include('instructor.form')

@endsection
