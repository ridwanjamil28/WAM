@extends('layouts.admin')

@section('content')

<h3 class="mb-4">Edit Artikel</h3>

<form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="mb-3">
<label>Judul</label>
<input type="text" name="title" class="form-control" value="{{ $article->title }}">
</div>
<div class="mb-3">
<label> Pilih Kategori</label>
<select name="category_id" class="form-control">
@foreach($categories as $category)
<option value="{{ $category->id }}"
{{ $article->category_id == $category->id ? 'selected' : '' }}>
{{ $category->name }}
</option>
@endforeach
</select>
</div>


<div class="mb-3">
<label>Deskripsi</label>
<textarea name="excerpt" class="form-control">{{ $article->excerpt }}</textarea>
</div>

<div class="mb-3">
<label>Konten</label>
<textarea name="content" class="form-control" rows="5">{{ $article->content }}</textarea>
</div>
<div class="mb-3">
    
@if($article->image)
<img src="{{ asset('storage/'.$article->image) }}" width="150">
@endif
</div>
<div class="mb-3">
<label>Gambar</label>
<input type="file" name="image" class="form-control">
</div>



<button class="btn btn-primary">Update</button>

</form>

@endsection