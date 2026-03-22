@extends('layouts.admin')

@section('content')

<h3 class="mb-4">Tambah Artikel</h3>

<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="mb-3">
<label>Judul</label>
<input type="text" name="title" class="form-control" required>
</div>
<div class="mb-3">
<label>Kategori</label>

<select name="category_id" class="form-control" required>
<option value="">-- Pilih Kategori --</option>

@foreach($categories as $category)
<option value="{{ $category->id }}">
{{ $category->name }}
</option>
@endforeach

</select>

</div>

<div class="mb-3">
<label>Deskripsi Singkat</label>
<textarea name="excerpt" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Konten</label>
<textarea name="content" id="editor" class="form-control" rows="5"></textarea>
</div>

<div class="mb-3">
<label>Gambar</label>
<input type="file" name="image" class="form-control">
</div>

<button class="btn btn-primary">Simpan</button>

</form>

@endsection