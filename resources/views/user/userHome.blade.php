@extends('layout.master')

@section('title', 'Home')

@section('content')

    <div class="py-4 bg-primary" id="Features-Title">
      <section class="container">
        <h2 class="display-5 text-center mt-5 text-dark">Features</h2>
        <p class="lead text-muted text-center mb-5">
          website ini di buat untuk membantu pengguna mencatat rencana dan kegiatan mereka.
Dengan tampilan yang sederhana dan fitur fitur yang sangat membantu membuat pengguna nyaman dalam menggunakanya.
        </p>
        <div class="row g-5 pb-5">
          <div class="col-xl-3 col-md-6">
            <div class="card p-5 text-center">
              <div class="card-body">
                <i class="bi bi-card-heading mb-3 ich" style="font-size: 3em; color:rgb(69, 107, 126);"></i>
                <h5 class="card-title mb-2">Take Notes</h5>
                <p class="card-text lead text-muted" style="font-size: 0.88em;">Pengguna dapat memberi judul dan menambahkan catatan di setiap task mereka.</p>
                <a href="/tasks" class="btn fw-bold" style="background-color: rgb(96, 131, 151); color:white;" id="card-btn">Try</a>
              </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card p-5 text-center">
            <div class="card-body">
              <i class="bi bi-pencil-square ich" style="font-size: 3em; color:rgb(69, 107, 126);" ></i>
              <h5 class="card-title mb-2">Editing</h5>
              <p class="card-text lead text-muted" style="font-size: 1.1em;">Pengguna dapat melakukan pengeditan pada judul dan catatan.</p>
              <a href="/tasks" class="btn fw-bold" style="background-color: rgb(96, 131, 151); color:white;" id="card-btn">Try</a>
            </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card p-5 text-center">
          <div class="card-body">
            <i class="bi bi-trash ich" style="font-size: 3em; color:rgb(69, 107, 126);" ></i>
            <h5 class="card-title mb-2">Deleting</h5>
            <p class="card-text lead text-muted" style="font-size: 1.1em;">Pengguna dapat menghapus task yang ingin mereka hapus.</p>
            <a href="/tasks" class="btn fw-bold" style="background-color: rgb(96, 131, 151); color:white;" id="card-btn">Try</a>
          </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card p-5 text-center">
        <div class="card-body">
          <i class="bi bi-ui-checks ich" style="font-size: 3em; color:rgb(69, 107, 126);" ></i>
          <h5 class="card-title mb-2">Check List</h5>
          <p class="card-text lead text-muted" style="font-size: 1.05em;">Pengguna dapat mencentang setiap task yang telah selesai di kerjakan.</p>
          <a href="/tasks" class="btn fw-bold" style="background-color: rgb(96, 131, 151); color:white;" id="card-btn">Try</a>
        </div>
    </div>
  </div>


@endsection