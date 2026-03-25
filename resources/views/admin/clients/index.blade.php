@extends('layouts.admin')

@section('content')

<h4>Data Client</h4>

<a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">+ Tambah</a>

<table class="table">
@foreach($clients as $c)
<tr>
    <td><img src="{{ asset('storage/'.$c->logo) }}" width="100"></td>
    <td>{{ $c->name }}</td>
    <td>
        <form action="{{ route('clients.destroy', $c->id) }}" method="POST">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>

@endsection