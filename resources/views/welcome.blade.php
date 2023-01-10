@extends('layouts.app')
@section('content')

<div class="main_hero bg-primary p-5 vh-100">
    <div class="container">
        <h1 class="fw-bold text-white text-center">
            Manuel <br>
            your next favourite Developer.
        </h1>
        <div class="button_elements d-flex justify-content-center py-5">
            <a class="btn btn-light" href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="btn btn-dark mx-3" href="{{ route('register') }}">{{ __('Registrati') }}</a>
        </div>

    </div>
</div>
@endsection