<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
</head>

<body>

<nav class="navbar navbar-dark bg-dark shadow">
<div class="container">

<a class="navbar-brand" href="/admin">
Admin Panel
</a>

<div>

<a href="/" class="btn btn-light btn-sm">
Website
</a>

<form action="{{ route('logout') }}" method="POST" style="display:inline;">
@csrf

<button type="submit" class="btn btn-danger btn-sm">
Logout
</button>

</form>

</div>

</div>
</nav>


<div class="container mt-3">

<div class="row">

<div class="col-md-3">

<div class="list-group">

<a href="/admin" class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }}">
Dashboard
</a>

<a href="{{ route('services.index') }}" 
class="list-group-item list-group-item-action {{ request()->is('admin/services*') ? 'active' : '' }}">
Kelola Layanan
</a>

<a href="{{ route('portfolio.index') }}" 
class="list-group-item list-group-item-action {{ request()->is('admin/portfolio*') ? 'active' : '' }}">
Portofolio
</a>

<a href="{{ route('articles.index') }}" 
class="list-group-item list-group-item-action {{ request()->is('admin/articles*') ? 'active' : '' }}">
Artikel
</a>

<a href="{{ route('categories.index') }}" 
class="list-group-item list-group-item-action {{ request()->is('admin/categories*') ? 'active' : '' }}">
Kategori
</a>

<a href="{{ route('settings.index') }}" 
class="list-group-item list-group-item-action {{ request()->is('admin/settings*') ? 'active' : '' }}">
Setting Website
</a>

<a href="{{ route('pricings.index') }}" 
class="list-group-item list-group-item-action {{ request()->is('admin/pricings*') ? 'active' : '' }}">
Pricing
</a>
<a href="{{ route('clients.index') }}" 
class="list-group-item list-group-item-action {{ request()->is('admin/clients*') ? 'active' : '' }}">
Client
</a>
<a href="{{ route('galleries.index') }}" 
class="list-group-item list-group-item-action {{ request()->is('admin/galleries*') ? 'active' : '' }}">
Galeri
</a>
</div>

</div>

<div class="col-md-9">

@yield('content')

</div>

</div>

</div>

</body>
<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
</script>
</html>