@extends('layouts.auth')

@section('content')
<div class="container-form">
  @session('status')
    <div class="alert alert-success" role="alert">
      {{ $value }}
    </div>
  @endsession
  <h2 class="h2-login">Login</h2>
  

  <form class="form-login" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-2">
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
    </div>
    <div class="mb-2">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-primary mt-3 botao-login">Submit</button>
    </div>  
  </form>
</div>
@endsection
