@extends('layouts.auth')
@section('content')
<div class="container-form">
  <h2 class="h2-login">Login</h2>
  <form class="form-login">
    <div class="mb-2">
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="mb-2">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-primary mt-3 botao-login">Submit</button>
    </div>  
  </form>
</div>
@endsection