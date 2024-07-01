@extends('layout-container')

@section('content')
<h1 class="text-center py-2">Task 2: Demonstrate CRUD operations with Eloquent</h1>
<ul class="list-group">
  <li class="list-group-item"><a href="{{ route('categories.index') }}">Manage Categories</a></li>
  <li class="list-group-item"><a href="{{ route('suppliers.index') }}">Manage Suppliers</a></li>
  <li class="list-group-item"><a href="{{ route('products.index') }}">Manage Products</a></li>
  <li class="list-group-item"><a href="{{ route('home') }}">Main Topics</a></li>
</ul>
@endsection