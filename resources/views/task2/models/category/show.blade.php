@extends('layout-container')

@section('content')
<div class="py-2 mb-2 btn-group" role="group" aria-label="Toolbar">
  <a href="{{ route('categories.index') }}" class="btn btn-outline-primary">List categories</a>
</div>

<h2>Details of Category ID: {{ $data->id }}</h2>
<dl>
  <dt>Name</dt>
  <dd>{{ $data->name }}</dd>
  
  <dt>Description</dt>
  <dd>{{ $data->description }}</dd>
  
  <dt>Created At</dt>
  <dd>{{ $data->created_at }}</dd>
  
  <dt>Updated At</dt>
  <dd>{{ $data->updated_at }}</dd>
</dl>
@endsection
