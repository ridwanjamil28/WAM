@extends('layouts.admin')

@section('content')

<h2>Data Layanan</h2>

<a href="{{ route('services.create') }}" class="btn btn-primary mb-3">
Tambah Layanan
</a>

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Nama</th>
<th>Deskripsi</th>
<th width="150">Aksi</th>
</tr>
</thead>

<tbody>

@foreach($services as $service)

<tr>

<td>{{ $service->nama }}</td>
<td>{{ $service->deskripsi }}</td>

<td>

<a href="{{ route('services.edit', $service->id) }}"
class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('services.destroy', $service->id) }}" 
      method="POST" 
      style="display:inline;">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Hapus
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

@endsection