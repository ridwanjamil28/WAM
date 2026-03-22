@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Portfolio</h2>

<a href="{{ route('portfolio.create') }}" class="btn btn-primary mb-3">
Tambah Portfolio
</a>

<table class="table table-bordered">

<tr>
<th>Judul</th>
<th>Deskripsi</th>
<th>Aksi</th>
</tr>

@foreach($portfolios as $portfolio)

<tr>

<td>{{ $portfolio->judul }}</td>
<td>{{ $portfolio->deskripsi }}</td>

<td>

<a href="{{ route('portfolio.edit',$portfolio->id) }}"
class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('portfolio.destroy',$portfolio->id) }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus portfolio ini?')">
Hapus
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection