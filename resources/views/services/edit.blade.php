@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Edit Layanan</h2>

<form action="{{ route('services.update',$service->id) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-3">

<label class="form-label">Nama Layanan</label>

<input type="text"
name="nama"
class="form-control"
value="{{ $service->nama }}">

</div>


<div class="mb-3">

<label class="form-label">Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"
rows="4">{{ $service->deskripsi }}</textarea>

</div>
@if($service->gambar)

<div class="mb-3">

<img src="{{ asset('images/'.$service->gambar) }}"
width="150">

</div>

@endif


<div class="mb-3">

<label class="form-label">Gambar</label>

<input type="file"
name="gambar"
class="form-control">

</div>

<button class="btn btn-success">
Update
</button>

</form>

@endsection