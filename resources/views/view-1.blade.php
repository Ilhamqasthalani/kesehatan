@extends('master')

@section('title')
Kesehatan
@endsection

@section('content')
<h1>Login</h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif


<form action="{{ route("login_proses") }}" method="POST" enctype="multipart/form-data">
  @csrf

  <label for="Email">Email</label> <input type="text" name="email" class="form-control" placeholder="Masukan Email">
  <br>
  <label for="Password"> Password</label> <input type="text" name="password" class="form-control" placeholder="Masukan Password">
  <br>
  <button type="submit" class="btn btn-primary">Simpan</button>

</form>
@endsection