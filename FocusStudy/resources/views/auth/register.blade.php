@extends('layouts.auth')

@section('content')
<form class="form-form" action="{{ route('register.store') }}" method="post">
    @csrf
    <h2 class="h2-register">Register</h2>
    <label for="name">
        <input id="name" name="name" class="input-form @error('name') is-invalid @enderror" type="text" placeholder="Full Name" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </label>
    <label for="email">
        <input id="email" name="email" class="input-form @error('email') is-invalid @enderror" type="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </label>
    <label for="password">
        <input id="password" name="password" class="input-form @error('password') is-invalid @enderror" type="password" placeholder="Password">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </label>
    <label for="password_confirmation">
        <input id="password_confirmation" name="password_confirmation" class="input-form" type="password" placeholder="Password Confirmation">
    </label>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
</form>
@endsection