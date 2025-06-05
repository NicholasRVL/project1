@extends('layout.master')

@section('content')
<div class="container">
    <h1>Edit Task ✏️</h1>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Catatan</label>
         <textarea name="notes" class="form-control" rows="5" required>{{ old('notes', $task->notes) }}</textarea>
    </div>



    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
