@extends('layouts.admin')

@section('content')

<h4>Data Pricing</h4>

<a href="{{ route('pricings.create') }}" class="btn btn-primary mb-3">+ Tambah</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
<tr>
    <th>Judul</th>
    <th>Harga</th>
    <th>Popular</th>
    <th>Aksi</th>
</tr>

@foreach($pricings as $p)
<tr>
    <td>{{ $p->title }}</td>
    <td>Rp.{{ number_format($p->price) }}</td>
    <td>{{ $p->is_popular ? 'Ya' : '-' }}</td>
    <td>
        <a href="{{ route('pricings.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>

        <form action="{{ route('pricings.destroy', $p->id) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

</table>

@endsection