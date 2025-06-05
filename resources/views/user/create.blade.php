@extends('layout.master')

@section('content')
<div class="container">
    <h1>Tambah Task Baru 📝</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul Task</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection