@extends('layout.master')

@section('content')
<div class="container">
    <h1>Detail Task 📌</h1>
    <p><strong>Judul:</strong> {{ $task->title }}</p>
    <p><strong>Status:</strong> {{ $task->is_done ? 'Selesai' : 'Belum selesai' }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
