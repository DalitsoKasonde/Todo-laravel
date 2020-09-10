@extends('layouts.app')

@section('content')
<h1>Edit your Todo</h1>
<form method="post" action="/todo/{{ $todo->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title"  placeholder="Enter title" value="{{ $todo->title }}" >
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" id="content" name="content"  placeholder="Enter content" value="{{ $todo->content }}">
      </div>
      <div class="form-group">
        <label for="due">Due Date</label>
        <input type="text" class="form-control" id="due" name="due" placeholder="Enter due date" value="{{ $todo->due }}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
