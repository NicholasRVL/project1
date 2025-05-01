@extends('main.main')

@section('content')
<div class="container-xxl todo-container shadow-sm p-4 bg-white rounded">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">📝 My Tasks</h4>

    </div>
</div>

<div class="input-group mb-3">
    <input type="text" class="form-control" id="taskInput" placeholder="Add a new task...">
    <button class="btn btn-primary" onclick="addTask()">Add</button>
  </div>

  <ul id="taskList" class="list-unstyled mb-0"></ul>
</div>


@endsection