@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Edit Portfolio</h2>

<form action="{{ route('portfolio.update',$portfolio->id) }}" 
method="POST" 
enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-3">

<label class="form-label">Judul</label>

<input type="text"
name="judul"
class="form-control"
value="{{ $portfolio->judul }}">

</div>


<div class="mb-3">

<label class="form-label">Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"
rows="4">{{ $portfolio->deskripsi }}</textarea>

</div>


@if($portfolio->gambar)

<div class="mb-3">

<img src="{{ asset('images/'.$portfolio->gambar) }}"
width="150">

</div>

@endif


<div class="mb-3">

<label class="form-label">Ganti Gambar</label>

<input type="file"
name="gambar"
class="form-control">

</div>


<button class="btn btn-success">
Update
</button>

</form>

@endsection