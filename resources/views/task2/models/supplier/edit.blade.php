@extends('layout-container')

@section('content')

@if (isset($data))
<h2>Edit supplier ID: {{ $data->id }}</h2>
@else
<h2>Create new supplier</h2>
@endif
<form method="POST" action="@if (isset($data)) {{ route('suppliers.update', ['supplier' => $data->id]) }} @else {{ route('suppliers.store') }} @endif">
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
    <label for="contact-name" class="form-label">Contact Name:</label>
    <input type="text" id="contact-name" name="contact_name" value="{{ old('contact_name', $data->contact_name ?? '') }}" class="form-control @error('contact_name') is-invalid @enderror">
    @error('contact_name')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address:</label>
    <textarea id="address" name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address', $data->address ?? '') }}</textarea>
    @error('address')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="city" class="form-label">City:</label>
    <input type="text" id="city" name="city" value="{{ old('city', $data->city ?? '') }}" class="form-control @error('city') is-invalid @enderror">
    @error('city')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="postal-code" class="form-label">Postal Code:</label>
    <input type="text" id="postal-code" name="postal_code" value="{{ old('postal_code', $data->postal_code ?? '') }}" class="form-control @error('postal_code') is-invalid @enderror">
    @error('postal_code')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="country" class="form-label">Country:</label>
    <input type="text" id="country" name="country" value="{{ old('country', $data->country ?? '') }}" class="form-control @error('country') is-invalid @enderror">
    @error('country')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="phone" class="form-label">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{ old('phone', $data->phone ?? '') }}" class="form-control @error('phone') is-invalid @enderror">
    @error('phone')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Cancel</a>
</form>

@endsection
