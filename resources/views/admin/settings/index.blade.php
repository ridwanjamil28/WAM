@extends('layouts.admin')

@section('content')

<h4 class="mb-3">Setting Website</h4>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form action="{{ route('settings.update') }}" method="POST">
@csrf

<div class="mb-3">
    <label>Nama Website</label>
    <input type="text" name="site_name" class="form-control"
    value="{{ $settings['site_name'] ?? '' }}">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="text" name="email" class="form-control"
    value="{{ $settings['email'] ?? '' }}">
</div>

<div class="mb-3">
    <label>Nomor WhatsApp</label>
    <input type="text" name="whatsapp" class="form-control"
    value="{{ $settings['whatsapp'] ?? '' }}">
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control">{{ $settings['alamat'] ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label>Hero Title</label>
    <input type="text" name="hero_title" class="form-control"
    value="{{ $settings['hero_title'] ?? '' }}">
</div>

<div class="mb-3">
    <label>Hero Description</label>
    <textarea name="hero_desc" class="form-control">{{ $settings['hero_desc'] ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label>Pesan Default WhatsApp</label>
    <textarea name="wa_message" class="form-control">{{ $settings['wa_message'] ?? '' }}</textarea>
</div>

<button class="btn btn-primary">Simpan</button>

</form>

@endsection