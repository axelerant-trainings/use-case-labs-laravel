@extends('layout-base')

@section('main_content')
<h1 class="text-center py-2">Topics</h1>
<div class="list-group">
  <a href="{{ route('topic.task2-crud') }}" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Task 2: Demonstrate CRUD operations with Eloquent</h3>
    </div>
    <div class="mb-1">
      In this usecase we will cover the following topics:
      <ul>
        <li>Create models with Eloquent</li>
        <li>Setup relationships between models</li>
        <li>Setup Resource Controllers to perform CRUD operations</li>
      </ul>
    </div>
  </a>
  
  <a href="{{ route('topic.task-2-1-restapi') }}" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Task 2.1: Create RESTful API for Product Management</h3>
    </div>
    <div class="mb-1">
      In this usecase we will cover the following topics:
      <ul>
        <li>Make REST API calls to create, update, delete and fetch products</li>
        <li>Demonstrate Swagger/OpenAPI documentation capabilities</li>
      </ul>
    </div>
  </a>
</div>
@endsection
