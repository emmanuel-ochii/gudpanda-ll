@extends('errors.layout')

@section('title', '429 Too Many Requests')

@section('content')
    <div class="error-code">429</div>
    <h2>Too Many Requests</h2>
    <p>Please slow down! Too many attempts in a short time.</p>
@endsection
