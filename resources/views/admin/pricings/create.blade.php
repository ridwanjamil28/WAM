@extends('layouts.admin')

@section('content')

<h4>Tambah Pricing</h4>

<form action="{{ route('pricings.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="title" class="form-control">
</div>

<div class="mb-3">
    <label>Harga</label>
    <input type="number" name="price" class="form-control">
</div>

<div class="mb-3">
    <label>
        <input type="checkbox" name="is_popular"> Popular
    </label>
</div>

<hr>

<h5>Item Pekerjaan</h5>
<div id="pekerjaan-wrapper"></div>
<button type="button" onclick="addPekerjaan()" class="btn btn-sm btn-success">+ Tambah</button>

<hr>

<h5>Syarat & Ketentuan</h5>
<div id="syarat-wrapper"></div>
<button type="button" onclick="addSyarat()" class="btn btn-sm btn-success">+ Tambah</button>

<br><br>
<button class="btn btn-primary">Simpan</button>

</form>

<script>
function addPekerjaan(){
    document.getElementById('pekerjaan-wrapper').innerHTML += `
        <div class="d-flex mb-2">
            <input type="text" name="pekerjaan[]" class="form-control me-2">
            <button type="button" onclick="this.parentElement.remove()" class="btn btn-danger">X</button>
        </div>
    `;
}

function addSyarat(){
    document.getElementById('syarat-wrapper').innerHTML += `
        <div class="d-flex mb-2">
            <input type="text" name="syarat[]" class="form-control me-2">
            <button type="button" onclick="this.parentElement.remove()" class="btn btn-danger">X</button>
        </div>
    `;
}
</script>

@endsection