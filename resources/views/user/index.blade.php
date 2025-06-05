@extends('layout.master')



@section('content')

<div class="container">
    <h1 class="mb-4">📋 Daftar Catatan / Tasks</h1>


    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="input-group">
            <input type="text" name="title" class="form-control" placeholder="Tulis task baru..." required>
            
            <button class="btn btn-primary">Tambah</button>
        </div>
    </form>


    <ul class="list-group">
        @forelse($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <input type="checkbox" class="form-check-input me-2" {{ $task->is_done ? 'checked' : '' }} onclick="event.preventDefault(); document.getElementById('toggle-form-{{ $task->id }}').submit();">
                    <span class="{{ $task->is_done ? 'text-decoration-line-through text-muted' : '' }}">{{ $task->title }}</span>
                    <span>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>


                </div>

                <div class="d-flex gap-2">
                    <form id="toggle-form-{{ $task->id }}" action="{{ route('tasks.toggle', $task->id) }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            </li>
        @empty
            <li class="list-group-item text-muted">Belum ada catatan...</li>
        @endforelse
    </ul>
</div>


@endsection