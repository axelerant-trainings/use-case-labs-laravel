@extends('layout-container')

@section('content')

@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h2>List of Products</h2>

<div class="py-2 mb-2 btn-group" role="group" aria-label="Toolbar">
  <a href="{{ route('topic.task2-crud') }}" class="btn btn-outline-primary">Subtopic Page</a>
  <a href="{{ route('products.create') }}" class="btn btn-outline-primary">Create Product</a>
</div>

@if ($data->isNotEmpty())
<div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Category Name</th>
          <th>Supplier Name</th>
          <th>
            ACTION
          </th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($data as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->category->name }}</td>
          <td>{{ $item->supplier->name }}</td>
          <td>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with action buttons">
              <div class="btn-group btn-group-sm me-2" role="group" aria-label="Action buttons">
                <a href="{{ route('products.edit', ['product' => $item->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                <a href="{{ route('products.show', ['product' => $item->id]) }}" class="btn btn-outline-primary">Show</a>
              </div>
              
              <div class="btn-group btn-group-sm me-2" role="group" aria-label="Delete record button">
                  <form
                    action="{{ route('products.destroy', ['product' => $item->id]) }}"
                    method="POST"
                    onsubmit="return confirm('Permanently delete record?')">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@else
<div class="alert alert-info">No product exists.</div>
@endif

@endsection
