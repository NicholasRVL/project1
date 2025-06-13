@extends('layout.master')

@section('title', 'Edit')

@section('content')
<div class="container">
    <h1 style="font-size: 3em; color: rgb(120, 154, 187);"><a href="{{ url()->previous() }}" ><i class="bi bi-arrow-bar-left navHover" style="font-size: 1em; color: rgb(120, 154, 187);"></i></a>Edit Task</h1>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label class="form-label" style="opacity: 70%;">Judul</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label" style="opacity: 70%;">Catatan</label>
         <textarea name="notes" class="form-control" rows="5" required>{{ old('notes', $task->notes) }}</textarea>
    </div>



    <button type="submit" class="btn" style="background-color: rgb(111, 145, 179); color: white;">Update</button>
</form>
</div>
@endsection
