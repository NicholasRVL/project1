@extends('layout.master')

@section('content')
<div class="container">
    <h1>Detail Task 📌</h1>
    <p style="word-wrap: break-word; overflow-wrap: break-word; white-space: normal;"><strong>Judul : </strong> {{ $task->title }}</p>
    <p style="word-wrap: break-word; overflow-wrap: break-word; white-space: normal;"><strong >Catatan : </strong> {{ $task->notes }}</p>
    <p><strong>Status : </strong> {{ $task->is_done ? 'Selesai' : 'Belum selesai' }}</p>
    <p><strong>Waktu Buat : </strong>{{ $task->created_at }}</p>
    <p><strong>Terakhir Update : </strong>{{ $task->updated_at }}</p>
    

    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
