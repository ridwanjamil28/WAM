@extends('layouts.admin')

@section('content')

<h4>Edit Pricing</h4>

<form action="{{ route('pricings.update', $pricing->id) }}" method="POST">
@csrf @method('PUT')

<input type="text" name="title" value="{{ $pricing->title }}" class="form-control mb-2">

<input type="number" name="price" value="{{ $pricing->price }}" class="form-control mb-2">

<label>
<input type="checkbox" name="is_popular" {{ $pricing->is_popular ? 'checked' : '' }}>
Popular
</label>

<hr>

<h5>Item Pekerjaan</h5>
<div id="pekerjaan-wrapper">
@foreach($pricing->items->where('type','pekerjaan') as $item)
<div class="d-flex mb-2">
<input type="text" name="pekerjaan[]" value="{{ $item->item }}" class="form-control me-2">
<button type="button" onclick="this.parentElement.remove()" class="btn btn-danger">X</button>
</div>
@endforeach
</div>

<button type="button" onclick="addPekerjaan()" class="btn btn-success btn-sm">+</button>

<hr>

<h5>Syarat</h5>
<div id="syarat-wrapper">
@foreach($pricing->items->where('type','syarat') as $item)
<div class="d-flex mb-2">
<input type="text" name="syarat[]" value="{{ $item->item }}" class="form-control me-2">
<button type="button" onclick="this.parentElement.remove()" class="btn btn-danger">X</button>
</div>
@endforeach
</div>

<button type="button" onclick="addSyarat()" class="btn btn-success btn-sm">+</button>

<br><br>
<button class="btn btn-primary">Update</button>

</form>

<script>
function addPekerjaan(){
document.getElementById('pekerjaan-wrapper').innerHTML += `
<div class="d-flex mb-2">
<input type="text" name="pekerjaan[]" class="form-control me-2">
<button type="button" onclick="this.parentElement.remove()" class="btn btn-danger">X</button>
</div>`;
}

function addSyarat(){
document.getElementById('syarat-wrapper').innerHTML += `
<div class="d-flex mb-2">
<input type="text" name="syarat[]" class="form-control me-2">
<button type="button" onclick="this.parentElement.remove()" class="btn btn-danger">X</button>
</div>`;
}
</script>

@endsection