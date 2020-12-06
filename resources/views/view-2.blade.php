@extends('master')

@section('title')
UTS Pemrograman Web Lanjut
@endsection

@section('content')
<h1>Pendaftaran</h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route("pendaftaran_proses") }}" method="POST" enctype="multipart/form-data">
  @csrf

  <label for="Email">Email</label> <input type="text" name="email" class="form-control" placeholder="Masukan Email">
  <br>

  <label for="Password"> Password</label> <input type="text" name="password" class="form-control" placeholder="Masukan Password">
  <br>
  <label for="Usia">Usia </label> <input type="text" name="umur" class="form-control" placeholder="Masukan Usia">
  <br>
  <label for="Gambar">Foto Profil</label> <input type="file" name="gambar" class="form-control" placeholder="Masukan Foto Profil">
  <br>
  <button type="submit" class="btn btn-primary">Simpan</button>

</form>
@endsection