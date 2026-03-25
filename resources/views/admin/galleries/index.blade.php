@extends('layouts.admin')

@section('content')

<h4>Galeri</h4>

<a href="{{ route('galleries.create') }}" class="btn btn-primary mb-3">+ Tambah</a>

<table class="table">
@foreach($galleries as $g)
<tr>
    <td><img src="{{ asset('storage/'.$g->image) }}" width="100"></td>
    <td>{{ $g->title }}</td>
    <td>
        <form action="{{ route('galleries.destroy', $g->id) }}" method="POST">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>

@endsection