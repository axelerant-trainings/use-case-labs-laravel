@extends('layout-container')

@section('content')
@if (isset($data))
<h2>Edit category ID: {{ $data->id }}</h2>
@else
<h2>Create new category</h2>
@endif

<form method="POST" action="@if (isset($data)) {{ route('categories.update', ['category' => $data->id]) }} @else {{ route('categories.store') }} @endif">
  @csrf
  
  @if (isset($data))
    {{ method_field('PUT') }}
  @endif
  
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name', $data->name ?? '') }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="description" class="form-label">Description:</label>
    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $data->description ?? '') }}</textarea>
    @error('description')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
