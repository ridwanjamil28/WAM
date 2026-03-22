@extends('layouts.admin')

@section('content')

<h3 class="mb-4">Manajemen Artikel</h3>

<a href="{{ route('articles.create') }}" class="btn btn-success mb-3">
+ Tambah Artikel
</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">
<tr>
<th width="5%">No</th>
<th>Judul</th>
<th width="20%">Aksi</th>
</tr>
</thead>

<tbody>

@forelse($articles as $article)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $article->title }}</td>
<td>

<a href="{{ route('articles.edit', $article->id) }}" 
class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('articles.destroy', $article->id) }}" 
method="POST" class="d-inline">
@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus?')">
Hapus
</button>

</form>

</td>
</tr>

@empty
<tr>
<td colspan="3" class="text-center">
Belum ada artikel
</td>
</tr>
@endforelse

</tbody>

</table>

@endsection