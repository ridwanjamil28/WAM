@extends('layouts.admin')

@section('content')

<h4>Tambah Client</h4>

<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="text" name="name" class="form-control mb-2" placeholder="Nama Client">

<input type="file" name="logo" class="form-control mb-2">

<button class="btn btn-success">Simpan</button>

</form>

@endsection