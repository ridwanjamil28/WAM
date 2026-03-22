@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Dashboard Admin</h2>

<div class="row">

<div class="col-md-4">
<div class="card text-center">
<div class="card-body">

<h5>Total Layanan</h5>
<h2>{{ \App\Models\Service::count() }}</h2>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center">
<div class="card-body">

<h5>Total Artikel</h5>
<h2>0</h2>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center">

<div class="card-body">

<h5>Total Portfolio</h5>

<h2>{{ \App\Models\Portfolio::count() }}</h2>

</div>

</div>
</div>

</div>

@endsection