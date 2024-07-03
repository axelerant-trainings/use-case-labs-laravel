@extends('layout-container')

@section('content')
<h1 class="text-center py-2">Task 2.1: Create RESTful API for Product Management</h1>

<div class="mb-2">
  We will need the following additional tools to interact with this application
  inorder to make the API calls:
  <ul>
    <li><a href="https://www.postman.com/downloads/" target="_blank">Postman Desktop App</a></li>
  </ul>
</div>
<div class="mb-2">
  <strong>Endpoints for making RESTful API calls:</strong>
  <table class="table">
    <thead>
      <tr>
        <th>HTTP method</th>
        <th>Url</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>GET</td>
        <td>{{ route('api.products.index') }}</td>
        <td>Return an array of products</td>
      </tr>
      <tr>
        <td>POST</td>
        <td>{{ route('api.products.store') }}</td>
        <td>Store a newly created product in storage.</td>
      </tr>
      <tr>
        <td>GET</td>
        <td>{{ Str::replaceLast('1', '{product}', route('api.products.show', ['product' => 1])) }}</td>
        <td>Return an array of specified product details.</td>
      </tr>
      <tr>
        <td>PUT|PATCH</td>
        <td>{{ Str::replaceLast('1', '{product}', route('api.products.update', ['product' => 1])) }}</td>
        <td>Update the specified product in storage.</td>
      </tr>
      <tr>
        <td>DELETE</td>
        <td>{{ Str::replaceLast('1', '{product}', route('api.products.destroy', ['product' => 1])) }}</td>
        <td>Remove the specified product from storage.</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="mt-2">
  <a href="{{ route('home') }}" class="btn btn-primary">Main Topics</a>
</div>
@endsection