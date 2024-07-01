@extends('layout-container')

@section('content')

@if (isset($data))
<h2>Edit product ID: {{ $data->id }}</h2>
@else
<h2>Create new product</h2>
@endif

<form method="POST" action="@if (isset($data)) {{ route('products.update', ['product' => $data->id]) }} @else {{ route('products.store') }} @endif">
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
    <label for="category-id" class="form-label">Category:</label>
    <select name="category_id" id="category-id" class="form-control @error('category_id') is-invalid @enderror">
      <option value="">[ Select Category ]</option>
      @foreach ($categories as $id => $name)
      <option value="{{ $id }}"
        @selected(old('category_id', $data->category_id ?? '') == $id)>{{ $name }}</option>
      @endforeach
    </select>
    @error('category_id')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="supplier-id" class="form-label">Supplier:</label>
    <select name="supplier_id" id="supplier-id" class="form-control @error('supplier_id') is-invalid @enderror">
      <option value="">[ Select Supplier ]</option>
      @foreach ($suppliers as $id => $name)
      <option value="{{ $id }}"
        @selected(old('supplier_id', $data->supplier_id ?? '') == $id)>{{ $name }}</option>
      @endforeach
    </select>
    @error('supplier_id')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="unit" class="form-label">Unit:</label>
    <input type="number" min="1" id="unit" name="unit" value="{{ old('unit', $data->unit ?? 1) }}" class="form-control @error('unit') is-invalid @enderror">
    @error('unit')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="price" class="form-label">Unit Price:</label>
    <input type="number" min="0.01" step="0.01" id="price" name="price" value="{{ old('price', $data->price ?? '1.00') }}" class="form-control @error('price') is-invalid @enderror">
    @error('price')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</form>

@endsection
