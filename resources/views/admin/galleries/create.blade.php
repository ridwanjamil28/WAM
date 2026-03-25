@extends('layouts.admin')

@section('content')

<h4>Tambah Galeri</h4>

<form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="text" name="title" class="form-control mb-2" placeholder="Judul">

<input type="file" name="image" class="form-control mb-2">

<button class="btn btn-success">Simpan</button>

</form>

@endsection