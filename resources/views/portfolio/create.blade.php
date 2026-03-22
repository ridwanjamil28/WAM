@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Tambah Portfolio</h2>

<form action="{{ route('portfolio.store') }}" 
method="POST" 
enctype="multipart/form-data">

@csrf

<div class="mb-3">

<label class="form-label">Judul Project</label>

<input type="text"
name="judul"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"
rows="4"></textarea>

</div>

<div class="mb-3">

<label class="form-label">Gambar</label>

<input type="file"
name="gambar"
class="form-control">

</div>

<button class="btn btn-success">
Simpan
</button>

</form>

@endsection