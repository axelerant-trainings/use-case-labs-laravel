@extends('layout-container')

@section('content')
<div class="py-2 mb-2 btn-group" role="group" aria-label="Toolbar">
  <a href="{{ route('products.index') }}" class="btn btn-outline-primary">List products</a>
</div>

<h2>Details of Product ID: {{ $data->id }}</h2>
<dl>
  <dt>Name</dt>
  <dd>{{ $data->name }}</dd>
  
  <dt>Category Name</dt>
  <dd>{{ $data->category->name }}</dd>
  
  <dt>Supplier Name</dt>
  <dd>{{ $data->supplier->name }}</dd>
  
  <dt>Unit</dt>
  <dd>{{ $data->unit }}</dd>
  
  <dt>Unit Price</dt>
  <dd>{{ $data->price }}</dd>
  
  <dt>Created At</dt>
  <dd>{{ $data->created_at }}</dd>
  
  <dt>Updated At</dt>
  <dd>{{ $data->updated_at }}</dd>
</dl>

@endsection
