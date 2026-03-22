@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Tambah Layanan</h2>

<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="mb-3">
<label>Nama Layanan</label>
<input type="text" name="nama" class="form-control">
</div>

<div class="mb-3">
<label>Deskripsi</label>
<textarea name="deskripsi" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Gambar</label>
<input type="file" name="gambar" class="form-control">
</div>

<button type="submit" class="btn btn-success">
Simpan
</button>

</form>

@endsection