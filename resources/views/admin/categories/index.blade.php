@extends('layouts.admin')

@section('content')

<h3 class="mb-4">Kategori</h3>

<a href="{{ route('categories.create') }}" class="btn btn-success mb-3">
+ Tambah Kategori
</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>Nama</th>
<th>Aksi</th>
</tr>

@foreach($categories as $category)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $category->name }}</td>
<td>

<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">
Hapus
</button>

</form>

</td>
</tr>
@endforeach

</table>

@endsection