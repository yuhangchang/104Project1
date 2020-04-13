@extends('app')
@section('content')
        <h1>{{ $resume->name }}</h1>
        <hr>
        <p>{{ $resume->resume }}</p>
@endsection
