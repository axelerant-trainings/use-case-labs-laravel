@extends('layout-container')

@section('content')
<div class="py-2 mb-2 btn-group" role="group" aria-label="Toolbar">
  <a href="{{ route('suppliers.index') }}" class="btn btn-outline-primary">List suppliers</a>
</div>

<h2>Details of supplier ID: {{ $data->id }}</h2>
<dl>
  <dt>Name</dt>
  <dd>{{ $data->name }}</dd>
  
  <dt>Contact Name</dt>
  <dd>{{ $data->contact_name }}</dd>
  
  <dt>Address</dt>
  <dd>{{ $data->address }}</dd>
  
  <dt>City</dt>
  <dd>{{ $data->city }}</dd>
  
  <dt>Postal Code</dt>
  <dd>{{ $data->postal_code }}</dd>
  
  <dt>Country</dt>
  <dd>{{ $data->country }}</dd>
  
  <dt>Phone</dt>
  <dd>{{ $data->phone }}</dd>
  
  <dt>Created At</dt>
  <dd>{{ $data->created_at }}</dd>
  
  <dt>Updated At</dt>
  <dd>{{ $data->updated_at }}</dd>
</dl>

@endsection
