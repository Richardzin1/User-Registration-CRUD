@extends('layouts.auth')

@section('content')
<form class="form-form" action="" method="post">
    <h2 class="h2-register">Register</h2>
    <label for="nome"><input name="nome" class="input-form" type="text" placeholder="Full Name" required></label>
    <label for="email"><input name="email" class="input-form" type="email" placeholder="Email" required></label>
    <label for="data"><input name="data" class="input-form" type="date" placeholder="date" required></label>
    <label for="senha"><input name="senha" class="input-form" type="password" placeholder="Password" required></label>
    <label for="senhaC"><input name="senhaC" class="input-form" type="password" placeholder="Confirm Password" required></label>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
</form>

@endsection